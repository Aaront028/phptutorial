<?php

require 'Item.php';
require 'Book.php';
// Item::showCount();

// $my_item = new Item('Huge', 'A big item');

// Item::showCount();

// $my_item2 = new Item('Small', 'A tiny item');

// Item::showCount();

// $my_item->name = "A new name";

// // echo $my_item->getName();

// define('MAXIMUM', 100);

// define('COLOUR', 'red');

// echo COLOUR;


// echo Item::MAX_LENGTH;

// $my_item = new Item();
// $my_item->name = "TV";

// echo $my_item->getListingDescription();

// echo "<br>";

// $book = new Book();
// $book->name = 'Hamlet';
// $book->author = 'Shakespeare';

// echo $book->getListingDescription();

$my_item = new Item();

echo $my_item->code;

$book = new Book();

echo $book->getCode();