<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" required name="nombre" placeholder="Nombre">
        <input type="text" required name="apellido" placeholder="Apellido">
        <input type="email" required name="email" placeholder="Email">
        <input type="password" required name="password" placeholder="Password">
        <button type="submit">Enviar</button>
    </form>

    <?php include 'recibir.php'; ?>

    <!-- Mostrar errores -->
    <?php if (!empty($_GET["nombre"])  && !empty($errors)): ?>
        <div style="color: red;">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Mostrar datos recibidos -->
    <?php if (empty($errors) && !empty($_GET)): ?>
        <div style="color: green;">
            <h3>Datos recibidos:</h3>
            <ul>
                <li>Nombre: <?php echo htmlspecialchars($nombre); ?></li>
                <li>Apellido: <?php echo htmlspecialchars($apellido); ?></li>
                <li>Email: <?php echo htmlspecialchars($email); ?></li>
                <li>Password: <?php echo htmlspecialchars($password); ?></li>
            </ul>
        </div>

    <?php endif; ?>

    <hr>

    <?php
    /* $text = "Hola Wilson, este es un texto de ejemplo para probar las funciones de string en PHP. Daniel";

    $textNew = preg_replace("/\bTHING|\bWilson|\bDanie\b/", "Maria", $text);
    echo "<p>Texto original: $text</p>";
    echo "<p>Texto modificado: $textNew</p>"; */

    ?>

</body>

</html>