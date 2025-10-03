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

    <?php
    $books = [
        [
            "name" => "Cien años de soledad",
            "author" => "Gabriel García Márquez",
            "releaseYear" => 1967,
            "purchaseUrl" => "<https://example.com/cien-anos-soledad>"
        ],
        [
            "name" => "La sombra del viento",
            "author" => "Gabriel García Márquez",
            "releaseYear" => 2001,
            "purchaseUrl" => "<https://example.com/sombra-viento>"
        ],
        [
            "name" => "Ficciones",
            "author" => "Jorge Luis Borges",
            "releaseYear" => 1944,
            "purchaseUrl" => "<https://example.com/ficciones>"
        ],
        [
            "name" => "El amor en los tiempos del cólera",
            "author" => "Gabriel García Márquez",
            "releaseYear" => 1985,
            "purchaseUrl" => "<https://example.com/amor-tiempos-colera>"
        ],
        [
            "name" => "La ciudad y los perros",
            "author" => "Mario Vargas Llosa",
            "releaseYear" => 1963,
            "purchaseUrl" => "<https://example.com/ciudad-perros>"
        ],
        [
            "name" => "2666",
            "author" => "Roberto Bolaño",
            "releaseYear" => 2004,
            "purchaseUrl" => "<https://example.com/2666>"
        ],
    ];

    function filterByAuthor($books, $author) {
      $filteredBooks = [];

        foreach ($books as $book) {
            if (strpos($book["author"], $author) !== false) {
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    }

    $newBooks = filterByAuthor($books, "García");
    ?>

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