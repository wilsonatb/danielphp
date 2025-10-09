<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>

    <style>
        .book-list {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .book-list ul {
            list-style-type: none;
            padding: 0;
        }

        .book-list li {
            margin-bottom: 10px;
        }

        .book-list a {
            text-decoration: none;
            color: #3498db;
        }

        .book-list a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

<?php require_once 'filtros.php'; ?>

    <div class="book-list">
        <ul>
            <?php foreach ($newBooks as $book): ?>
                <li>
                    <a href="<?php echo $book['purchaseUrl']; ?>">
                        <?php echo $book['name']; ?>
                    </a> by <?php echo $book['author']; ?> (<?php echo $book['releaseYear']; ?>)
                </li>
            <?php endforeach; ?>
        </ul>

    </div>

    <script>
        console.log("hola")
    </script>

</body>

</html>