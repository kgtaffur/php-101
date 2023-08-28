<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Demo</title>
        <style>
            body {
                display: grid;
                place-items: center;
                height: 100vh;
                margin: 0;
                font-family: sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>
            <?php
                $greeting = "Hey";
                $name = "Kevin";
                echo $greeting . " " . $name . "!";
            ?>
        </h1>
        <h1>
            <?php
                $greeting = "Hey";
                $name = "Kevin";
                echo "$greeting $name!!";
            ?>
        </h1>
        <p>
            <?php
                echo "This should be a paragraph within a p tag but it is echoing from php code.";
            ?>
        </p>
        <?php 
            $book = "Black Matter";
            $read = false;

            if ($read) {
                $message = "You have read the book $book.";
            } else {
                $message = "You have not read the book $book.";
            }
        ?>
        <h2><?= $message ?></h2>

        <h3>Recommended Books</h3>
        <ul>
            <?php foreach($books as $book) : ?>
                <li><?= $book ?></li>
            <?php endforeach ?>
        </ul>

        <p>
            <?php
                // can also access values this way
                echo $books[2];
                echo "<br/>";
                // or this way for associative arrays
                echo $booksAssociative[0]['name'];
            ?>
        </p>

        <h3>Next are books from an Associative Array</h3>
        <?php foreach ($booksAssociative as $book) : ?>
            <?php if (filterByAuthor($book, 'Andy Weir')) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                    </a>
                </li>
            <?php endif ?>
        <?php endforeach ?>

        <h3>Also books from Associative Array by Andy Weir</h3>
        <?php foreach ($filteredItems as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </body>
</html>

