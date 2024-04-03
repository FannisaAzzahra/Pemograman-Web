<?php
$targetDirectory = "uploads/";

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (isset($_FILES['files'])) {
    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileType = $_FILES['files']['type'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;

        if (substr($fileType, 0, 5) == "image") {
            $maxFileSize = 5 * 1024 * 1024; // Batasi ukuran gambar menjadi 5 MB

            if ($fileSize <= $maxFileSize) {
                if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                    echo "Gambar $fileName berhasil diunggah.<br>";
                    echo '<img src="' . $targetFile . '" alt="Thumbnail"><br>';
                } else {
                    echo "Gagal mengunggah gambar $fileName.<br>";
                }
            } else {
                echo "Gambar $fileName melebihi ukuran maksimum (5 MB).<br>";
            }
        } else {
            echo "File $fileName bukan gambar. File tidak diunggah.<br>";
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}
?>