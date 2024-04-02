<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "documents/"; // Direktori tujuan untuk menyimpan dokumen
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile,  PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    $maxFileSize = 10 * 1024 * 1024;
    
    if(in_array($fileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen Berhasil Diunggah";
        } else {
            echo "Dokumen Menguggah File";
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>