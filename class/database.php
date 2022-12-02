<?php

class Database {

  public function getConn() {
    $db_host = "localhost";
    $db_name = "cms";
    $db_user = "cms_www";
    $db_pass = "password";

    $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset-utf8';

    return new PDO($dsn, $db_user, $db_pass);
  }
}