<?
// [2IO80] DBL Hypermedia group 2, TU/e 2017
session_start();

if(!isset($_SESSION['lang'])) {
  $_SESSION['lang'] = "en_us";
}

$lang = $_SESSION['lang'];
$lData = array();
load_lData();

// Load language file
function load_lData() {
  global $lang, $lData;
  $file = "langfiles/" . $lang . ".php";
  $lData = include $file;
}

function setlang($new) {
  global $lang, $lData;
  $lang = $new;
  $_SESSION['lang'] = $new;
  load_lData();
}

function ls($name) {
  global $lang, $lData;;
  echo $lData[$name];
}
?>
