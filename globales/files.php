<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="foto">
        <button type="submit">Subir</button>
    </form>

    
<?php
if ($_FILES) {
    var_dump($_FILES);

    $type = $_FILES['foto']['type'];
    if ($type != "image/png" && $type != "image/jpg" && $type != "image/jpeg") {
        echo "<p style='color:red;'>El archivo no es una imagen válida (png, jpg, jpeg).</p>";
        exit;
    }

}
?>
</body>

</html>