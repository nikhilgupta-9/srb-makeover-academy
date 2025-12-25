<?php
session_start();
include "db-conn.php";

// Upload configuration
$upload_dir = "uploads/portfolio/";

// Add new portfolio item
if(isset($_POST['add_portfolio'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $category_id = $_POST['category_id'];
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $client_name = mysqli_real_escape_string($conn, $_POST['client_name']);
    $project_date = $_POST['project_date'] ? $_POST['project_date'] : NULL;
    $featured = isset($_POST['featured']) ? 1 : 0;
    
    // Handle image upload
    $image_name = '';
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        
        if(in_array($ext, $allowed)) {
            $image_name = uniqid() . '_' . time() . '.' . $ext;
            $target_path = $upload_dir . $image_name;
            
            if(!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }
            
            move_uploaded_file($_FILES['image']['tmp_name'], $target_path);
        }
    }
    
    $sql = "INSERT INTO portfolio_items (category_id, title, description, image_path, client_name, project_date, featured) 
            VALUES ('$category_id', '$title', '$description', '$image_name', '$client_name', '$project_date', '$featured')";
    
    if(mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Portfolio item added successfully!";
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($conn);
    }
}

// Update portfolio item
if(isset($_POST['update_portfolio'])) {
    $id = $_POST['id'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $category_id = $_POST['category_id'];
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $client_name = mysqli_real_escape_string($conn, $_POST['client_name']);
    $project_date = $_POST['project_date'];
    $featured = isset($_POST['featured']) ? 1 : 0;
    
    // Handle image update
    $image_update = "";
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        
        if(in_array($ext, $allowed)) {
            $image_name = uniqid() . '_' . time() . '.' . $ext;
            $target_path = $upload_dir . $image_name;
            
            // Delete old image
            $old_image = mysqli_fetch_assoc(mysqli_query($conn, "SELECT image_path FROM portfolio_items WHERE id='$id'"));
            if($old_image['image_path'] && file_exists($upload_dir . $old_image['image_path'])) {
                unlink($upload_dir . $old_image['image_path']);
            }
            
            move_uploaded_file($_FILES['image']['tmp_name'], $target_path);
            $image_update = ", image_path = '$image_name'";
        }
    }
    
    $sql = "UPDATE portfolio_items SET 
            category_id = '$category_id', 
            title = '$title', 
            description = '$description', 
            client_name = '$client_name', 
            project_date = '$project_date', 
            featured = '$featured'
            $image_update
            WHERE id = '$id'";
    
    if(mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Portfolio item updated successfully!";
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($conn);
    }
}

// Delete portfolio item
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    
    // Delete image file
    $image = mysqli_fetch_assoc(mysqli_query($conn, "SELECT image_path FROM portfolio_items WHERE id='$id'"));
    if($image['image_path'] && file_exists($upload_dir . $image['image_path'])) {
        unlink($upload_dir . $image['image_path']);
    }
    
    $sql = "DELETE FROM portfolio_items WHERE id='$id'";
    if(mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Portfolio item deleted successfully!";
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($conn);
    }
}

// Fetch all portfolio items
$portfolio_items = mysqli_query($conn, "
    SELECT p.*, c.name as category_name 
    FROM portfolio_items p 
    LEFT JOIN portfolio_categories c ON p.category_id = c.id 
    ORDER BY p.id DESC
");

// Fetch categories for dropdown
$categories = mysqli_query($conn, "SELECT * FROM portfolio_categories WHERE status='active' ORDER BY name");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Manage Portfolio | Admin Dashboard</title>
    <link rel="icon" href="assets/img/logo.png" type="image/png">
    
    <?php include "links.php"; ?>
    
    <style>
        .portfolio-thumb {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 6px;
            border: 2px solid #dee2e6;
        }
        .featured-badge {
            padding: 3px 8px;
            border-radius: 12px;
            font-size: 11px;
        }
        .action-buttons .btn {
            padding: 5px 10px;
            font-size: 12px;
        }
        .form-section {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        .image-preview {
            max-height: 150px;
            object-fit: contain;
            border-radius: 8px;
            border: 1px solid #dee2e6;
        }
        .table th {
            background-color: #f8f9fa;
            font-weight: 600;
            border-top: none;
        }
        .table tbody tr:hover {
            background-color: rgba(0,123,255,.05);
        }
        .modal-lg-custom {
            max-width: 800px;
        }
    </style>
</head>

<body class="crm_body_bg">
    <?php include "header.php"; ?>
    
    <section class="main_content dashboard_part large_header_bg">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <?php include "top_nav.php"; ?>
                </div>
            </div>
        </div>

        <div class="main_content_iner">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h2 class="m-0">Manage Portfolio</h2>
                                        <p class="mb-0 text-muted">Add and manage your portfolio items</p>
                                    </div>
                                    <div class="action-buttons">
                                        <a href="portfolio-categories.php" class="btn btn-secondary btn-sm">
                                            <i class="fas fa-tags me-1"></i> Manage Categories
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                
                                <!-- Success/Error Messages -->
                                <?php if(isset($_SESSION['success'])): ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="fas fa-check-circle me-2"></i>
                                        <?= $_SESSION['success']; unset($_SESSION['success']); ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if(isset($_SESSION['error'])): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="fas fa-exclamation-circle me-2"></i>
                                        <?= $_SESSION['error']; unset($_SESSION['error']); ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                
                                <!-- Add Portfolio Form -->
                                <div class="card mb-4 border-0 shadow-sm">
                                    <div class="card-header bg-white border-0">
                                        <h5 class="mb-0">
                                            <i class="fas fa-plus-circle text-primary me-2"></i>
                                            Add New Portfolio Item
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" enctype="multipart/form-data" id="portfolioForm">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label fw-medium">Title <span class="text-danger">*</span></label>
                                                    <input type="text" name="title" class="form-control" placeholder="Enter portfolio title" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label fw-medium">Category <span class="text-danger">*</span></label>
                                                    <select name="category_id" class="form-select" required>
                                                        <option value="">Select Category</option>
                                                        <?php 
                                                        mysqli_data_seek($categories, 0);
                                                        while($cat = mysqli_fetch_assoc($categories)): 
                                                        ?>
                                                            <option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['name']) ?></option>
                                                        <?php endwhile; ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label fw-medium">Client Name</label>
                                                    <input type="text" name="client_name" class="form-control" placeholder="Optional">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label fw-medium">Project Date</label>
                                                    <input type="date" name="project_date" class="form-control">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label class="form-label fw-medium">Description</label>
                                                    <textarea name="description" class="form-control" rows="3" placeholder="Enter portfolio description"></textarea>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label fw-medium">Image <span class="text-danger">*</span></label>
                                                    <input type="file" name="image" class="form-control" accept="image/*" required
                                                           onchange="previewImage(this)">
                                                    <small class="text-muted">Max file size: 5MB. Allowed: JPG, PNG, GIF, WEBP</small>
                                                    <div class="mt-2" id="imagePreviewContainer" style="display: none;">
                                                        <img id="imagePreview" class="image-preview" alt="Image Preview">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check form-switch mt-4">
                                                        <input class="form-check-input" type="checkbox" name="featured" value="1" id="featuredSwitch">
                                                        <label class="form-check-label fw-medium" for="featuredSwitch">
                                                            Mark as Featured
                                                        </label>
                                                    </div>
                                                    <small class="text-muted d-block mt-2">
                                                        <i class="fas fa-info-circle me-1"></i>
                                                        Featured items will be highlighted
                                                    </small>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" name="add_portfolio" class="btn btn-primary">
                                                        <i class="fas fa-save me-2"></i> Add Portfolio Item
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                <!-- Portfolio Items Table -->
                                <div class="card border-0 shadow-sm">
                                    <div class="card-header bg-white border-0">
                                        <h5 class="mb-0">
                                            <i class="fas fa-images text-primary me-2"></i>
                                            All Portfolio Items
                                        </h5>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th width="100">Image</th>
                                                        <th>Title</th>
                                                        <th>Category</th>
                                                        <th width="120">Featured</th>
                                                        <th width="100">Date</th>
                                                        <th width="150" class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if(mysqli_num_rows($portfolio_items) > 0): ?>
                                                        <?php while($item = mysqli_fetch_assoc($portfolio_items)): ?>
                                                            <tr>
                                                                <td>
                                                                    <img src="uploads/portfolio/<?= $item['image_path'] ?>" 
                                                                         class="portfolio-thumb" 
                                                                         alt="<?= htmlspecialchars($item['title']) ?>"
                                                                         data-bs-toggle="modal" 
                                                                         data-bs-target="#imageModal"
                                                                         data-img="uploads/portfolio/<?= $item['image_path'] ?>"
                                                                         data-title="<?= htmlspecialchars($item['title']) ?>"
                                                                         style="cursor: pointer;">
                                                                </td>
                                                                <td>
                                                                    <div class="fw-medium"><?= htmlspecialchars($item['title']) ?></div>
                                                                    <?php if($item['client_name']): ?>
                                                                        <small class="text-muted">Client: <?= htmlspecialchars($item['client_name']) ?></small>
                                                                    <?php endif; ?>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-light text-dark border">
                                                                        <?= htmlspecialchars($item['category_name']) ?>
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <?php if($item['featured']): ?>
                                                                        <span class="featured-badge bg-success bg-opacity-10 text-success">
                                                                            <i class="fas fa-star me-1"></i> Featured
                                                                        </span>
                                                                    <?php else: ?>
                                                                        <span class="featured-badge bg-secondary bg-opacity-10 text-secondary">
                                                                            Standard
                                                                        </span>
                                                                    <?php endif; ?>
                                                                </td>
                                                                <td>
                                                                    <small class="text-muted">
                                                                        <?= $item['project_date'] ? date('M d, Y', strtotime($item['project_date'])) : 'N/A' ?>
                                                                    </small>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="btn-group action-buttons" role="group">
                                                                        <button type="button" class="btn btn-outline-primary btn-sm" 
                                                                                data-bs-toggle="modal" 
                                                                                data-bs-target="#editModal<?= $item['id'] ?>"
                                                                                title="Edit">
                                                                            <i class="fas fa-edit"></i>
                                                                        </button>
                                                                        <a href="?delete=<?= $item['id'] ?>" 
                                                                           class="btn btn-outline-danger btn-sm delete-btn"
                                                                           onclick="return confirmDelete('<?= htmlspecialchars(addslashes($item['title'])) ?>')"
                                                                           title="Delete">
                                                                            <i class="fas fa-trash"></i>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            
                                                            <!-- Edit Modal -->
                                                            <div class="modal fade" id="editModal<?= $item['id'] ?>" tabindex="-1" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg-custom">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">
                                                                                <i class="fas fa-edit me-2"></i>
                                                                                Edit Portfolio Item
                                                                            </h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                                        </div>
                                                                        <form method="POST" enctype="multipart/form-data">
                                                                            <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-6 mb-3">
                                                                                        <label class="form-label fw-medium">Title <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="title" class="form-control" 
                                                                                               value="<?= htmlspecialchars($item['title']) ?>" required>
                                                                                    </div>
                                                                                    <div class="col-md-6 mb-3">
                                                                                        <label class="form-label fw-medium">Category <span class="text-danger">*</span></label>
                                                                                        <select name="category_id" class="form-select" required>
                                                                                            <?php 
                                                                                            $cats = mysqli_query($conn, "SELECT * FROM portfolio_categories WHERE status='active'");
                                                                                            while($cat = mysqli_fetch_assoc($cats)): 
                                                                                            ?>
                                                                                                <option value="<?= $cat['id'] ?>" <?= $cat['id'] == $item['category_id'] ? 'selected' : '' ?>>
                                                                                                    <?= htmlspecialchars($cat['name']) ?>
                                                                                                </option>
                                                                                            <?php endwhile; ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 mb-3">
                                                                                        <label class="form-label fw-medium">Client Name</label>
                                                                                        <input type="text" name="client_name" class="form-control" 
                                                                                               value="<?= htmlspecialchars($item['client_name']) ?>">
                                                                                    </div>
                                                                                    <div class="col-md-6 mb-3">
                                                                                        <label class="form-label fw-medium">Project Date</label>
                                                                                        <input type="date" name="project_date" class="form-control" 
                                                                                               value="<?= $item['project_date'] ?>">
                                                                                    </div>
                                                                                    <div class="col-md-12 mb-3">
                                                                                        <label class="form-label fw-medium">Description</label>
                                                                                        <textarea name="description" class="form-control" rows="3"><?= htmlspecialchars($item['description']) ?></textarea>
                                                                                    </div>
                                                                                    <div class="col-md-6 mb-3">
                                                                                        <label class="form-label fw-medium">Current Image</label>
                                                                                        <div class="mb-2">
                                                                                            <img src="uploads/portfolio/<?= $item['image_path'] ?>" 
                                                                                                 class="image-preview" 
                                                                                                 alt="Current Image">
                                                                                        </div>
                                                                                        <input type="file" name="image" class="form-control" accept="image/*">
                                                                                        <small class="text-muted">Upload new image to replace current one</small>
                                                                                    </div>
                                                                                    <div class="col-md-6 mb-3">
                                                                                        <div class="form-check form-switch mt-3">
                                                                                            <input class="form-check-input" type="checkbox" name="featured" 
                                                                                                   value="1" id="featuredSwitchEdit<?= $item['id'] ?>"
                                                                                                   <?= $item['featured'] ? 'checked' : '' ?>>
                                                                                            <label class="form-check-label fw-medium" for="featuredSwitchEdit<?= $item['id'] ?>">
                                                                                                Mark as Featured
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                                                    <i class="fas fa-times me-2"></i> Cancel
                                                                                </button>
                                                                                <button type="submit" name="update_portfolio" class="btn btn-primary">
                                                                                    <i class="fas fa-save me-2"></i> Update
                                                                                </button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endwhile; ?>
                                                    <?php else: ?>
                                                        <tr>
                                                            <td colspan="6" class="text-center py-5">
                                                                <div class="empty-state">
                                                                    <i class="fas fa-images fa-3x text-muted mb-3"></i>
                                                                    <h5 class="mb-2">No Portfolio Items Found</h5>
                                                                    <p class="text-muted mb-0">Start by adding your first portfolio item</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                    <!-- Table Footer -->
                                    <div class="card-footer bg-white border-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="text-muted">
                                                Showing <span class="fw-bold"><?= mysqli_num_rows($portfolio_items) ?></span> portfolio items
                                            </div>
                                            <div>
                                                <a href="portfolio-categories.php" class="btn btn-outline-primary">
                                                    <i class="fas fa-tags me-2"></i> Manage Categories
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>
    </section>

    <!-- Image Preview Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" class="img-fluid rounded" alt="">
                    <div class="mt-3" id="imageInfo"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="#" id="downloadImage" class="btn btn-primary" download>
                        <i class="fas fa-download me-2"></i> Download
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    
    <script>
    // Image preview on file select
    function previewImage(input) {
        const preview = document.getElementById('imagePreview');
        const container = document.getElementById('imagePreviewContainer');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                container.style.display = 'block';
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    // Delete confirmation
    function confirmDelete(title) {
        return confirm(`Are you sure you want to delete "${title}"?\n\nThis action cannot be undone.`);
    }
    
    // Image modal functionality
    const imageModal = document.getElementById('imageModal');
    if (imageModal) {
        imageModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const imgSrc = button.getAttribute('data-img');
            const title = button.getAttribute('data-title');
            
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('imageModalLabel');
            const downloadLink = document.getElementById('downloadImage');
            const imageInfo = document.getElementById('imageInfo');
            
            modalImage.src = imgSrc;
            modalTitle.textContent = title;
            downloadLink.href = imgSrc;
            downloadLink.download = title;
            
            imageInfo.innerHTML = `
                <div class="text-start">
                    <p class="mb-1"><strong>Title:</strong> ${title}</p>
                    <p class="mb-0 text-muted"><small>Click and drag to view full size</small></p>
                </div>
            `;
        });
    }
    
    // Initialize tooltips
    $(function () {
        $('[title]').tooltip({
            trigger: 'hover'
        });
    });
    
    // Form validation
    document.getElementById('portfolioForm')?.addEventListener('submit', function(e) {
        const fileInput = this.querySelector('input[name="image"]');
        if (fileInput.files.length > 0) {
            const fileSize = fileInput.files[0].size / 1024 / 1024; // in MB
            if (fileSize > 5) {
                e.preventDefault();
                alert('File size exceeds 5MB limit. Please choose a smaller file.');
                fileInput.focus();
            }
        }
    });
    
    // Auto-hide alerts after 5 seconds
    setTimeout(() => {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        });
    }, 5000);
    </script>
</body>
</html>