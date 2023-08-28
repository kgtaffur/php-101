<?php

// this is an ARRAY
$books = [
    "Do Androids Dream of Electricity Sheep",
    "The Langoliers",
    "Hail Mary"
];

// this is an ASSOCIATIVE ARRAY
$booksAssociative = [
    [
        'name' => 'Do Androids Dream of Electricity Sheep.',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://example.com'
    ]
];

function filterByAuthor($book, $author) {
    if ($book['author'] === $author) {
        return true;
    }
    return false;
}

function filterByAuthor2($books, $author) {
    $filteredBooks = [];

    foreach ($books as $book) {
        if ($book['author'] === $author) {
            $filteredBooks[] = $book;
        }
    }
    return $filteredBooks;
}

function filter($items, $fn) {
    $filteredItems = [];
        
    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}

// array_filter is a php function for arrays
$filteredItems = array_filter($booksAssociative, function ($book) {
    return $book['releaseYear'] > 2000;
});

require "index.view.php";
