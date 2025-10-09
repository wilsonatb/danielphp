<?php

$nombre = $_GET['nombre'] ?? null;
$apellido = $_GET['apellido'] ?? null;
$email = $_GET['email'] ?? null;
$password = $_GET['password'] ?? null;
$errors = [];

if (empty($nombre)) {
    $errors[] = "El nombre es obligatorio.";
}

if (empty($apellido)) {
    $errors[] = "El apellido es obligatorio.";
}

if (empty($email)) {
    $errors[] = "El email es obligatorio.";
}

if ($nombre && strlen($nombre) < 3) {
    $errors[] = "El nombre debe tener al menos 3 caracteres.";
}

if ($apellido && strlen($apellido) < 3) {
    $errors[] = "El apellido debe tener al menos 3 caracteres.";
}

if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "El email no es válido.";
}

if ($password && strlen($password) < 6) {
    $errors[] = "La contraseña debe tener al menos 6 caracteres.";
}

if ($nombre && !preg_match("/^[a-zA-Z]+$/", $nombre)) {
    $errors[] = "El nombre solo debe contener letras.";
}

if ($apellido && !preg_match("/^[a-zA-Z]+$/", $apellido)) {
    $errors[] = "El apellido solo debe contener letras.";
}
