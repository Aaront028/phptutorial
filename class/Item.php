<?php

class Item {

  CONST MAX_LENGTH = 24;
  public $name;
  public $description = 'This is the default value';

  protected $code = 1234;

  public static $count = 0;

  // public function __construct($name, $description){
  //   $this->name = $name;
  //   $this->description = $description;

  //   static::$count++;
  // }

  public function getListingDescription() {
      return "Item: " . $this->name;
  }

  public function sayHello() {
    echo "Hello";
  }

  //getter
  public function getName() {
    return $this->name;
  }

  public static function showCount() {
    echo static::$count;
  }
  // //setter
  // public function setName($name) {
  //    $this->name = $name;
  // }
  // //getter
  // public function getDescription() {
  //   return $this->description;
  // }
  // //setter
  // public function setDescription($description) {
  //    $this->description = $description;
  // }

}
