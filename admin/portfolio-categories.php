<?php
session_start();
include "db-conn.php";

// Add new category
if (isset($_POST['add_category'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $slug = strtolower(str_replace(' ', '-', $name));

    $sql = "INSERT INTO portfolio_categories (name, slug) VALUES ('$name', '$slug')";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Category added successfully!";
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($conn);
    }
}

// Update category
if (isset($_POST['update_category'])) {
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    $sql = "UPDATE portfolio_categories SET name='$name' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Category updated successfully!";
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($conn);
    }
}

// Delete category
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    // Check if category has portfolio items
    $check = mysqli_query($conn, "SELECT COUNT(*) as count FROM portfolio_items WHERE category_id='$id'");
    $row = mysqli_fetch_assoc($check);

    if ($row['count'] > 0) {
        $_SESSION['error'] = "Cannot delete category that has portfolio items!";
    } else {
        $sql = "DELETE FROM portfolio_categories WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['success'] = "Category deleted successfully!";
        } else {
            $_SESSION['error'] = "Error: " . mysqli_error($conn);
        }
    }
}

// Fetch all categories
$categories = mysqli_query($conn, "SELECT * FROM portfolio_categories ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Portfolio Categories | Admin Dashboard</title>
    <link rel="icon" href="assets/img/logo.png" type="image/png">
    
    <?php include "links.php"; ?>
    
    <style>
        .category-form .input-group {
            max-width: 500px;
        }
        .status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }
        .edit-form {
            display: none;
        }
        .edit-mode .edit-form {
            display: block;
        }
        .edit-mode .view-mode {
            display: none;
        }
        .action-buttons .btn {
            padding: 5px 12px;
            font-size: 13px;
        }
        .table th {
            background-color: #f8f9fa;
            font-weight: 600;
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
                                        <h2 class="m-0">Portfolio Categories</h2>
                                        <p class="mb-0 text-muted">Manage your portfolio categories here</p>
                                    </div>
                                    <div class="action-buttons">
                                        <a href="portfolio.php" class="btn btn-secondary btn-sm">
                                            <i class="fas fa-images me-1"></i> Manage Portfolio
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
                                
                                <!-- Add Category Form -->
                                <div class="card mb-4 border-0 shadow-sm">
                                    <div class="card-header bg-white border-0">
                                        <h5 class="mb-0">
                                            <i class="fas fa-plus-circle text-primary me-2"></i>
                                            Add New Category
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" class="category-form">
                                            <div class="row align-items-center">
                                                <div class="col-md-8 mb-3 mb-md-0">
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-light border-end-0">
                                                            <i class="fas fa-tag text-muted"></i>
                                                        </span>
                                                        <input type="text" name="name" class="form-control" 
                                                               placeholder="Enter category name" required>
                                                    </div>
                                                    <small class="text-muted mt-2 d-block">
                                                        <i class="fas fa-info-circle me-1"></i>
                                                        The slug will be generated automatically
                                                    </small>
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="submit" name="add_category" class="btn btn-primary w-100">
                                                        <i class="fas fa-save me-2"></i> Add Category
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                <!-- Categories Table -->
                                <div class="card border-0 shadow-sm">
                                    <div class="card-header bg-white border-0">
                                        <h5 class="mb-0">
                                            <i class="fas fa-list text-primary me-2"></i>
                                            All Categories
                                        </h5>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th width="60">ID</th>
                                                        <th>Category Name</th>
                                                        <th>Slug</th>
                                                        <th width="100">Status</th>
                                                        <th width="150" class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if(mysqli_num_rows($categories) > 0): ?>
                                                        <?php while ($category = mysqli_fetch_assoc($categories)): ?>
                                                            <tr id="category-<?= $category['id'] ?>" class="<?= isset($_POST['edit_id']) && $_POST['edit_id'] == $category['id'] ? 'edit-mode' : '' ?>">
                                                                <td class="fw-bold">#<?= $category['id'] ?></td>
                                                                
                                                                <!-- View Mode -->
                                                                <td class="view-mode">
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="me-2"><?= htmlspecialchars($category['name']) ?></span>
                                                                        <?php if($category['status'] == 'active'): ?>
                                                                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-2 py-1 rounded">
                                                                                <i class="fas fa-check-circle me-1"></i> Active
                                                                            </span>
                                                                        <?php else: ?>
                                                                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1 rounded">
                                                                                <i class="fas fa-times-circle me-1"></i> Inactive
                                                                            </span>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </td>
                                                                
                                                                <!-- Edit Mode -->
                                                                <td class="edit-form">
                                                                    <form method="POST" class="d-flex">
                                                                        <input type="hidden" name="id" value="<?= $category['id'] ?>">
                                                                        <input type="text" name="name" value="<?= htmlspecialchars($category['name']) ?>" 
                                                                               class="form-control form-control-sm me-2" required>
                                                                        <button type="submit" name="update_category" class="btn btn-success btn-sm me-1">
                                                                            <i class="fas fa-check"></i>
                                                                        </button>
                                                                        <button type="button" class="btn btn-secondary btn-sm cancel-edit">
                                                                            <i class="fas fa-times"></i>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                                
                                                                <td>
                                                                    <code><?= $category['slug'] ?></code>
                                                                </td>
                                                                
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input status-toggle" type="checkbox" 
                                                                                   id="status-<?= $category['id'] ?>" 
                                                                                   <?= $category['status'] == 'active' ? 'checked' : '' ?>
                                                                                   data-id="<?= $category['id'] ?>">
                                                                            <label class="form-check-label" for="status-<?= $category['id'] ?>">
                                                                                <?= ucfirst($category['status']) ?>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                
                                                                <td class="text-center">
                                                                    <div class="btn-group action-buttons" role="group">
                                                                        <button type="button" class="btn btn-outline-primary btn-sm edit-btn" 
                                                                                data-id="<?= $category['id'] ?>"
                                                                                title="Edit">
                                                                            <i class="fas fa-edit"></i>
                                                                        </button>
                                                                        <a href="?delete=<?= $category['id'] ?>" 
                                                                           class="btn btn-outline-danger btn-sm delete-btn"
                                                                           onclick="return confirmDelete('<?= htmlspecialchars($category['name']) ?>')"
                                                                           title="Delete">
                                                                            <i class="fas fa-trash"></i>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <?php endwhile; ?>
                                                    <?php else: ?>
                                                        <tr>
                                                            <td colspan="5" class="text-center py-5">
                                                                <div class="empty-state">
                                                                    <i class="fas fa-tags fa-3x text-muted mb-3"></i>
                                                                    <h5 class="mb-2">No Categories Found</h5>
                                                                    <p class="text-muted mb-0">Start by adding your first category</p>
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
                                                Showing <span class="fw-bold"><?= mysqli_num_rows($categories) ?></span> categories
                                            </div>
                                            <div>
                                                <a href="portfolio.php" class="btn btn-primary">
                                                    <i class="fas fa-arrow-right me-2"></i> Go to Portfolio Management
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

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <script>
    // Edit button functionality
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const row = document.getElementById('category-' + id);
            row.classList.add('edit-mode');
        });
    });
    
    // Cancel edit functionality
    document.querySelectorAll('.cancel-edit').forEach(button => {
        button.addEventListener('click', function() {
            const row = this.closest('tr');
            row.classList.remove('edit-mode');
        });
    });
    
    // Status toggle functionality
    document.querySelectorAll('.status-toggle').forEach(toggle => {
        toggle.addEventListener('change', function() {
            const id = this.getAttribute('data-id');
            const status = this.checked ? 'active' : 'inactive';
            
            // AJAX call to update status
            fetch('update-category-status.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `id=${id}&status=${status}`
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    // Update label text
                    const label = this.nextElementSibling;
                    label.textContent = status.charAt(0).toUpperCase() + status.slice(1);
                    
                    // Show success message
                    showAlert('Status updated successfully!', 'success');
                } else {
                    this.checked = !this.checked;
                    showAlert('Error updating status!', 'error');
                }
            })
            .catch(error => {
                this.checked = !this.checked;
                showAlert('Error updating status!', 'error');
            });
        });
    });
    
    // Delete confirmation
    function confirmDelete(name) {
        return confirm(`Are you sure you want to delete "${name}"?\n\nThis action cannot be undone.`);
    }
    
    // Show alert function
    function showAlert(message, type) {
        const alertDiv = document.createElement('div');
        alertDiv.className = `alert alert-${type} alert-dismissible fade show`;
        alertDiv.innerHTML = `
            <i class="fas fa-${type === 'success' ? 'check' : 'exclamation'}-circle me-2"></i>
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        
        // Insert at the top of white_card_body
        const cardBody = document.querySelector('.white_card_body');
        cardBody.insertBefore(alertDiv, cardBody.firstChild);
        
        // Auto remove after 5 seconds
        setTimeout(() => {
            if(alertDiv.parentNode) {
                alertDiv.remove();
            }
        }, 5000);
    }
    
    // Handle form submission feedback
    document.addEventListener('DOMContentLoaded', function() {
        // If there's an edit form with error, open it
        const editForms = document.querySelectorAll('.edit-form input[name="name"]');
        editForms.forEach(input => {
            if(input.value === '') {
                const row = input.closest('tr');
                row.classList.add('edit-mode');
            }
        });
    });
    </script>
    
    <!-- Optional: Create update-category-status.php -->
    <?php
    // Save this as update-category-status.php
    /*
    <?php
    session_start();
    include "db-conn.php";
    
    if(isset($_POST['id']) && isset($_POST['status'])) {
        $id = intval($_POST['id']);
        $status = mysqli_real_escape_string($conn, $_POST['status']);
        
        $sql = "UPDATE portfolio_categories SET status='$status' WHERE id='$id'";
        if(mysqli_query($conn, $sql)) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => mysqli_error($conn)]);
        }
    }
    ?>
    */
    ?>
</body>
</html>