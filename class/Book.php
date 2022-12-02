<?php

//inherited all the properties and methods of the parent Item class.
class Book extends Item {

  public $author;
  public function getListingDescription() {

    //child element
    // return $this->name . " by " . $this->author;
    
    //parent element
    return parent::getListingDescription() . " by " . $this->author;
  }

  public function getCode() {
    return $this->code;
  }

}