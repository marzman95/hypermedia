<?
$lang = "nl";
function ls($name) {
  global $lang;
  $stringy = $name . "<br>Lang: " . $lang;
  echo $stringy;
}
  ls('test');
?>
