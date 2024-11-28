<?php
require_once 'Author.php';
require_once 'Book.php';


$author = new Author("John Doe", "john.doe@example.com");

$book = new Book("123456789", "Learn PHP OOP", $author, 29.99, 100);


echo $book . "<br>";

$book->setPrice(35.99);
$book->setQty(120);
echo "Updated Book: " . $book . "<br>";

echo "Author Name: " . $book->getAuthorName() . "<br>";