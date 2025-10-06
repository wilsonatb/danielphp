<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Respuesta Mia
    $Nombres = [
        "name" => "Ana" , "Luis" , "Marta",
        "years" => 25, 30 , 28,
    ];

    foreach ($Nombres as $nombre =>$edad) {
        echo "$nombre tiene $edad años ";
    }
    // Solucion de busqueda
    $edades =[
        "Ana" => 25,
        "Luis" => 30,
        "Marta" => 28
    ];

    foreach ($Nombres as $nombre =>$edad) {
        echo "$nombre tiene $edad años ";
    }
    ?>
</body>
</html>