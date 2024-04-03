<?php 
if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    @$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'])) . "");
    $extensions = array("txt", "pdf", "doc", "docx");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Ekstensi file yang diizinkan adalah PDF, TXT, DOC, atau DOCX";
    }

    if ($file_size > 2097125) {
        $errors[] = "Ukuran file tidak boleh lebih dari 2 mb";
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah";
    } else {
        echo implode(" ", $errors);
    }
    
}
?>