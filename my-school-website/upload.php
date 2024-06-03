<?php
// upload.php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file-upload'])) {
    $file = $_FILES['file-upload'];
    $uploadDirectory = 'uploads/';
    
    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    $filePath = $uploadDirectory . basename($file['name']);

    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        echo "File uploaded successfully.";
    } else {
        echo "Failed to upload file.";
    }
} else {
    echo "No file uploaded.";
}
?>
