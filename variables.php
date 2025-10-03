<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $libro = "pinocho";
        $read = false;

        if(isset($read) && $read) {
            $message = "Tu has leido $libro";
        } else {
            $message = "Tu no has leido $libro";
        }

    ?>
    <h1>
	    <?= $message; ?>
    </h1>
</body>

</html>