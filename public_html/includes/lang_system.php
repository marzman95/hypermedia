<?php
// [2IO80] DBL Hypermedia group 2, TU/e 2017
session_start();
require('sqlConnect.php');

if(!isset($_SESSION['lang'])) {
  $_SESSION['lang'] = "en_us";
}

$lang = $_SESSION['lang'];

function setlang($new) {
  global $lang, $lData;
  $lang = $new;
  $_SESSION['lang'] = $new;
}

function ls($name) {
  $name = strtolower($name);
  global $lang, $connection;
  $col = "";
  switch ($lang) {
    case "nl_nl":
      $col = "nl_string";
      //$query = "SELECT nl_string FROM translations WHERE name='$name'";
      break;
    case "en_us":
      $col = "en_string";
      //$query = "SELECT en_string FROM translations WHERE name='$name'";
      break;
  }
  $query = "SELECT * FROM translations WHERE name='$name'";
  $resulted_row = $connection->query($query);
  $results = $resulted_row->fetch_assoc();
  //print_r($results);
  $with_html = $results[$col];
  echo html_entity_decode(html_entity_decode($with_html));
}
?>
