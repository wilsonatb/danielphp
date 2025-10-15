<?php
$nombre = $_POST['nombre'] ?? null;
$errors = [];

if (empty($nombre)) {
    $errors[] = "El nombre es obligatorio.";
}

if ($nombre && strlen($nombre) < 3) {
    $errors[] = "El nombre debe tener al menos 3 caracteres.";
}

if ($nombre && !preg_match("/^[a-zA-Z]+$/", $nombre)) {
    $errors[] = "El nombre solo debe contener letras.";
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
} elseif ($nombre) {
    echo "<h1>Hola, " . htmlspecialchars($nombre) . "!</h1>";
}
?>