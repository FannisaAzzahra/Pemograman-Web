<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiupload Gambar</title>
</head>
<body>
    <h2>Unggah Gambar</h2>
    <form id="upload-form" action="upload_ajax_gambar.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" id="files" multiple="multiple" accept="image/*">
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status">
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
    crossorigin="anonymous"></script>
    <script src="upload_gambar.js"></script>
</body>
</html>