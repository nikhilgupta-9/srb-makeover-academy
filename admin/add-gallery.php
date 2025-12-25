<?php
session_start();
include "db-conn.php";

// Handle multiple image upload
if (isset($_POST['gallery-img'])) {
    $upload_successes = [];
    $upload_errors = [];
    
    // Check if files were uploaded
    if(isset($_FILES['images']) && count($_FILES['images']['name']) > 0) {
        $target_dir = "uploads/gallery/";
        
        // Create directory if it doesn't exist
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        $max_size = 5 * 1024 * 1024; // 5MB
        
        // Loop through all uploaded files
        for($i = 0; $i < count($_FILES['images']['name']); $i++) {
            if($_FILES['images']['error'][$i] === UPLOAD_ERR_OK) {
                $file_extension = strtolower(pathinfo($_FILES['images']['name'][$i], PATHINFO_EXTENSION));
                $unique_name = uniqid() . '_' . time() . '_' . $i . '.' . $file_extension;
                $target_file = $target_dir . $unique_name;
                
                // Validate image
                if(in_array($file_extension, $allowed_types)) {
                    if($_FILES['images']['size'][$i] <= $max_size) {
                        if(move_uploaded_file($_FILES['images']['tmp_name'][$i], $target_file)) {
                            // Insert into database with prepared statement
                            $stmt = $conn->prepare("INSERT INTO gallery (image_name, image_path) VALUES (?, ?)");
                            $original_name = $_FILES['images']['name'][$i];
                            $stmt->bind_param("ss", $original_name, $target_file);
                            
                            if($stmt->execute()) {
                                $upload_successes[] = "Image '{$original_name}' uploaded successfully!";
                            } else {
                                $upload_errors[] = "Database error for '{$original_name}': " . $stmt->error;
                            }
                            $stmt->close();
                        } else {
                            $upload_errors[] = "Error moving uploaded file: " . $_FILES['images']['name'][$i];
                        }
                    } else {
                        $upload_errors[] = "File '{$_FILES['images']['name'][$i]}' too large. Maximum size is 5MB.";
                    }
                } else {
                    $upload_errors[] = "File '{$_FILES['images']['name'][$i]}' type not allowed. Only JPG, JPEG, PNG, GIF, and WEBP files are allowed.";
                }
            } elseif($_FILES['images']['error'][$i] !== UPLOAD_ERR_NO_FILE) {
                $upload_errors[] = "Error uploading file '{$_FILES['images']['name'][$i]}': Error code " . $_FILES['images']['error'][$i];
            }
        }
        
        // Prepare success/error messages
        if(count($upload_successes) > 0) {
            $upload_success = implode("<br>", $upload_successes);
        }
        if(count($upload_errors) > 0) {
            $upload_error = implode("<br>", $upload_errors);
        }
    } else {
        $upload_error = "Please select at least one image to upload.";
    }
}

// Handle image deletion
if(isset($_POST['delete_btn'])) {
    $image_id = intval($_POST['image_id']);
    
    // First get the image path
    $stmt = $conn->prepare("SELECT image_path FROM gallery WHERE id = ?");
    $stmt->bind_param("i", $image_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $image_path = $row['image_path'];
        
        // Delete from database
        $stmt = $conn->prepare("DELETE FROM gallery WHERE id = ?");
        $stmt->bind_param("i", $image_id);
        
        if($stmt->execute()) {
            // Delete the actual file
            if(file_exists($image_path)) {
                unlink($image_path);
            }
            $delete_success = "Image deleted successfully!";
        } else {
            $delete_error = "Error deleting image from database.";
        }
    } else {
        $delete_error = "Image not found in database.";
    }
    $stmt->close();
}

// Fetch all gallery images
$query = "SELECT * FROM gallery ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Gallery Management | Sales Dashboard</title>
    <link rel="icon" href="assets/img/logo.png" type="image/png">
    
    <?php include "links.php"; ?>
    
    <style>
        .gallery-container {
            padding: 20px;
        }
        .upload-section {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .gallery-item {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .gallery-item:hover {
            transform: translateY(-5px);
        }
        .gallery-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            cursor: pointer;
        }
        .gallery-actions {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0,0,0,0.7);
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }
        .img-preview {
            max-width: 100%;
            max-height: 80vh;
        }
        .preview-modal .modal-dialog {
            max-width: 90%;
        }
        .alert {
            margin-bottom: 20px;
        }
        
        /* Drag & Drop Styles */
        .drop-zone {
            border: 2px dashed #007bff;
            border-radius: 10px;
            padding: 40px;
            text-align: center;
            background-color: #f8f9fa;
            cursor: pointer;
            transition: all 0.3s;
            margin-bottom: 20px;
        }
        .drop-zone:hover, .drop-zone.dragover {
            background-color: #e9f5ff;
            border-color: #0056b3;
        }
        .drop-zone i {
            font-size: 48px;
            color: #007bff;
            margin-bottom: 15px;
        }
        .upload-info {
            font-size: 14px;
            color: #666;
            margin-top: 10px;
        }
        .file-list {
            margin-top: 20px;
            max-height: 200px;
            overflow-y: auto;
        }
        .file-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8px 12px;
            background: white;
            border-radius: 5px;
            margin-bottom: 8px;
            border: 1px solid #dee2e6;
        }
        .file-item:last-child {
            margin-bottom: 0;
        }
        .file-info {
            display: flex;
            align-items: center;
        }
        .file-icon {
            margin-right: 10px;
            color: #007bff;
        }
        .file-name {
            font-weight: 500;
        }
        .file-size {
            font-size: 12px;
            color: #666;
        }
        .remove-file {
            background: none;
            border: none;
            color: #dc3545;
            cursor: pointer;
            font-size: 16px;
        }
        .upload-progress {
            margin-top: 20px;
        }
        .progress {
            height: 20px;
            margin-bottom: 10px;
        }
        .upload-stats {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            color: #666;
        }
        .upload-btn {
            position: relative;
            overflow: hidden;
        }
        .upload-btn input[type="file"] {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
        .selected-files-count {
            background-color: #007bff;
            color: white;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            margin-left: 5px;
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
                                        <h2 class="m-0">Gallery Management</h2>
                                        <p class="mb-0 text-muted">Drag & drop or click to upload multiple images</p>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <!-- Success/Error Messages -->
                                <?php if(isset($upload_success)): ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Success!</strong><br>
                                        <?= $upload_success ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if(isset($upload_error)): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Upload Issues:</strong><br>
                                        <?= $upload_error ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if(isset($delete_success)): ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <?= $delete_success ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if(isset($delete_error)): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= $delete_error ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="gallery-container">
                                    <!-- Upload Section -->
                                    <div class="upload-section">
                                        <h4>Upload Multiple Images</h4>
                                        <p class="text-muted mb-4">You can upload multiple images at once (Max 5MB each)</p>
                                        
                                        <form action="" method="post" enctype="multipart/form-data" id="uploadForm">
                                            <!-- Drag & Drop Zone -->
                                            <div class="drop-zone" id="dropZone">
                                                <i class="fas fa-cloud-upload-alt"></i>
                                                <h5>Drag & Drop Images Here</h5>
                                                <p>or</p>
                                                <button type="button" class="btn btn-primary upload-btn" id="browseBtn">
                                                    <i class="fas fa-folder-open me-2"></i> Browse Files
                                                    <span class="selected-files-count" id="fileCount" style="display: none;">0</span>
                                                </button>
                                                <input type="file" name="images[]" id="fileInput" multiple accept="image/*" style="display: none;">
                                                <div class="upload-info">
                                                    Supports: JPG, JPEG, PNG, GIF, WEBP<br>
                                                    Max file size: 5MB
                                                </div>
                                            </div>
                                            
                                            <!-- Selected Files List -->
                                            <div class="file-list" id="fileList" style="display: none;">
                                                <h6>Selected Files:</h6>
                                                <div id="selectedFiles"></div>
                                            </div>
                                            
                                            <!-- Progress Bar -->
                                            <div class="upload-progress" id="uploadProgress" style="display: none;">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" 
                                                         role="progressbar" 
                                                         style="width: 0%" 
                                                         aria-valuenow="0" 
                                                         aria-valuemin="0" 
                                                         aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <div class="upload-stats">
                                                    <span>Uploading: <span id="currentFile">0</span> of <span id="totalFiles">0</span></span>
                                                    <span id="uploadPercentage">0%</span>
                                                </div>
                                            </div>
                                            
                                            <div class="mt-4">
                                                <button type="submit" name="gallery-img" class="btn btn-primary" id="uploadSubmitBtn" disabled>
                                                    <i class="fas fa-upload me-2"></i> Upload All Images
                                                </button>
                                                <button type="button" class="btn btn-secondary" id="clearFilesBtn" style="display: none;">
                                                    <i class="fas fa-times me-2"></i> Clear All
                                                </button>
                                                <a href="show-products.php" class="btn btn-outline-secondary ms-2">
                                                    <i class="fas fa-arrow-left me-2"></i> Back to Products
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <!-- Gallery Display -->
                                    <h4 class="mt-5 mb-4">Gallery Images</h4>
                                    
                                    <?php if($result && mysqli_num_rows($result) > 0): ?>
                                        <div class="gallery-grid">
                                            <?php while($row = mysqli_fetch_assoc($result)): ?>
                                                <div class="gallery-item">
                                                    <img src="<?= htmlspecialchars($row['image_path']) ?>" 
                                                         alt="<?= htmlspecialchars($row['image_name']) ?>" 
                                                         class="gallery-img"
                                                         data-bs-toggle="modal" 
                                                         data-bs-target="#imagePreviewModal"
                                                         data-img-src="<?= htmlspecialchars($row['image_path']) ?>"
                                                         data-img-name="<?= htmlspecialchars($row['image_name']) ?>">
                                                    
                                                    <div class="gallery-actions">
                                                        <span class="text-white"><?= htmlspecialchars($row['image_name']) ?></span>
                                                        <form action="" method="post" onsubmit="return confirm('Are you sure you want to delete this image?');">
                                                            <input type="hidden" name="image_id" value="<?= $row['ID'] ?>">
                                                            <button type="submit" name="delete_btn" class="btn btn-sm btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php else: ?>
                                        <div class="alert alert-info">
                                            No images found in the gallery. Upload some images to get started.
                                        </div>
                                    <?php endif; ?>
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
    <div class="modal fade preview-modal" id="imagePreviewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewImageTitle">Image Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="" class="img-preview" id="previewImage" alt="Preview">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="#" class="btn btn-primary" id="downloadImageBtn" download>
                        <i class="fas fa-download me-2"></i> Download
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Drag & Drop functionality
        document.addEventListener('DOMContentLoaded', function() {
            const dropZone = document.getElementById('dropZone');
            const fileInput = document.getElementById('fileInput');
            const browseBtn = document.getElementById('browseBtn');
            const fileList = document.getElementById('fileList');
            const selectedFiles = document.getElementById('selectedFiles');
            const fileCount = document.getElementById('fileCount');
            const uploadSubmitBtn = document.getElementById('uploadSubmitBtn');
            const clearFilesBtn = document.getElementById('clearFilesBtn');
            const uploadProgress = document.getElementById('uploadProgress');
            const progressBar = document.querySelector('.progress-bar');
            const currentFileSpan = document.getElementById('currentFile');
            const totalFilesSpan = document.getElementById('totalFiles');
            const uploadPercentage = document.getElementById('uploadPercentage');
            
            let selectedFilesArray = [];
            
            // Prevent default drag behaviors
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, preventDefaults, false);
                document.body.addEventListener(eventName, preventDefaults, false);
            });
            
            // Highlight drop zone when item is dragged over it
            ['dragenter', 'dragover'].forEach(eventName => {
                dropZone.addEventListener(eventName, highlight, false);
            });
            
            ['dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, unhighlight, false);
            });
            
            // Handle dropped files
            dropZone.addEventListener('drop', handleDrop, false);
            
            // Handle browse button click
            browseBtn.addEventListener('click', () => {
                fileInput.click();
            });
            
            // Handle file input change
            fileInput.addEventListener('change', handleFiles);
            
            // Handle clear files button
            clearFilesBtn.addEventListener('click', clearFiles);
            
            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }
            
            function highlight() {
                dropZone.classList.add('dragover');
            }
            
            function unhighlight() {
                dropZone.classList.remove('dragover');
            }
            
            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                handleFiles({ target: { files } });
            }
            
            function handleFiles(e) {
                const files = Array.from(e.target.files);
                
                // Clear existing files if any
                selectedFilesArray = [];
                
                // Add new files
                files.forEach(file => {
                    if (validateFile(file)) {
                        selectedFilesArray.push(file);
                    }
                });
                
                updateFileList();
                updateUI();
            }
            
            function validateFile(file) {
                const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
                const maxSize = 5 * 1024 * 1024; // 5MB
                
                if (!allowedTypes.includes(file.type)) {
                    alert(`File "${file.name}" is not an allowed image type.`);
                    return false;
                }
                
                if (file.size > maxSize) {
                    alert(`File "${file.name}" exceeds the 5MB size limit.`);
                    return false;
                }
                
                return true;
            }
            
            function updateFileList() {
                selectedFiles.innerHTML = '';
                
                selectedFilesArray.forEach((file, index) => {
                    const fileItem = document.createElement('div');
                    fileItem.className = 'file-item';
                    
                    const fileSize = formatFileSize(file.size);
                    
                    fileItem.innerHTML = `
                        <div class="file-info">
                            <i class="fas fa-image file-icon"></i>
                            <div>
                                <div class="file-name">${file.name}</div>
                                <div class="file-size">${fileSize}</div>
                            </div>
                        </div>
                        <button type="button" class="remove-file" data-index="${index}">
                            <i class="fas fa-times"></i>
                        </button>
                    `;
                    
                    selectedFiles.appendChild(fileItem);
                });
                
                // Add event listeners to remove buttons
                document.querySelectorAll('.remove-file').forEach(button => {
                    button.addEventListener('click', function() {
                        const index = parseInt(this.getAttribute('data-index'));
                        selectedFilesArray.splice(index, 1);
                        updateFileList();
                        updateUI();
                    });
                });
            }
            
            function updateUI() {
                const count = selectedFilesArray.length;
                
                if (count > 0) {
                    fileList.style.display = 'block';
                    fileCount.textContent = count;
                    fileCount.style.display = 'inline-flex';
                    uploadSubmitBtn.disabled = false;
                    clearFilesBtn.style.display = 'inline-block';
                } else {
                    fileList.style.display = 'none';
                    fileCount.style.display = 'none';
                    uploadSubmitBtn.disabled = true;
                    clearFilesBtn.style.display = 'none';
                }
            }
            
            function clearFiles() {
                selectedFilesArray = [];
                fileInput.value = '';
                updateFileList();
                updateUI();
                uploadProgress.style.display = 'none';
            }
            
            function formatFileSize(bytes) {
                if (bytes === 0) return '0 Bytes';
                const k = 1024;
                const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
            }
            
            // Form submission with progress simulation
            const uploadForm = document.getElementById('uploadForm');
            uploadForm.addEventListener('submit', function(e) {
                if (selectedFilesArray.length === 0) {
                    e.preventDefault();
                    alert('Please select files to upload.');
                    return;
                }
                
                // Show progress bar
                uploadProgress.style.display = 'block';
                progressBar.style.width = '0%';
                progressBar.setAttribute('aria-valuenow', 0);
                totalFilesSpan.textContent = selectedFilesArray.length;
                currentFileSpan.textContent = '1';
                uploadPercentage.textContent = '0%';
                
                // Simulate upload progress (remove this in production)
                let currentFile = 0;
                const totalFiles = selectedFilesArray.length;
                
                const progressInterval = setInterval(() => {
                    currentFile++;
                    const progress = Math.min((currentFile / totalFiles) * 100, 100);
                    
                    progressBar.style.width = progress + '%';
                    progressBar.setAttribute('aria-valuenow', progress);
                    currentFileSpan.textContent = Math.min(currentFile, totalFiles);
                    uploadPercentage.textContent = Math.round(progress) + '%';
                    
                    if (currentFile >= totalFiles) {
                        clearInterval(progressInterval);
                        // Form will submit normally after this
                    }
                }, 300);
            });
            
            // Image preview modal
            const previewModal = document.getElementById('imagePreviewModal');
            if (previewModal) {
                previewModal.addEventListener('show.bs.modal', function(event) {
                    const button = event.relatedTarget;
                    const imgSrc = button.getAttribute('data-img-src');
                    const imgName = button.getAttribute('data-img-name');
                    
                    const modalTitle = previewModal.querySelector('.modal-title');
                    const modalImage = previewModal.querySelector('.img-preview');
                    const downloadBtn = previewModal.querySelector('#downloadImageBtn');
                    
                    modalTitle.textContent = imgName;
                    modalImage.src = imgSrc;
                    modalImage.alt = imgName;
                    
                    // Set download attributes
                    downloadBtn.href = imgSrc;
                    downloadBtn.setAttribute('download', imgName);
                });
            }
        });
    </script>
</body>
</html>