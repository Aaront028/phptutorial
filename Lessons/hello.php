<?php

// $message = "Hello, World ok ok?!";
// $count = 3;
// $price = 1.99;

// var_dump($message);
// var_dump($count);
// var_dump($price);

// $is_admin = false;
// $data = null;
// var_dump($is_admin, $data);

// $count = 10;
// $size = 2;

// var_dump($count + 5);
// var_dump($count + $size);

// $price = 2.95;
// $quantity = 5;

// var_dump($price * $quantity);


// $message = "Hello";
// $name = "Dave";

// echo $message . " "  . $name;

// $price = "150";
// $quantity = 3;

// $price = $price * $quantity;

// var_dump($price);

// $is_editor = true;
// $is_admin = false;

// var_dump($is_editor or $is_admin);
// var_dump($is_editor and $is_admin);

// $message = 'Hello';
// $name = "Dave";

// $start = "3 o'clock";
// $end = '4 o\'clock';

// var_dump($end);

// $days = "Monday\nTuesday\nWednesday";

// var_dump($days);

// echo "Hello there" . " " . $name;
// echo "Hello there {$name}";

// $articles = array(  6=>"First post",  "Another post", 8=> "Read this!" );

// $articles2 = array(  "first" => "First post",  "second" => "Another post", "third" => "Read this!" );

// var_dump($articles2['third']);

// $values = [
//   "message" => "Hello World!",
//   "count" => 150,
//   "pi" => 3.14,
//   "status" => false,
//   "result" => null
// ];

// $count = 3;
// $price = 9.99;

// $values = [$count, $price];


// var_dump($values);

$articles = array(  6=>"First post",  "Another post", 8=> "Read this!" );

foreach ($articles as $index => $article) {
  echo $index, " - ",  $article, ", ";
}

