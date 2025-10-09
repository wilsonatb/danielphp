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

    $newBooks = array_filter($books, function($book) {
        return $book['releaseYear'] >= 2000;
    });
