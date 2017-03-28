<?
require('sqlSecret.php');

$connection = new mysqli($_SQL['HOST'], $_SQL['USER'], $_SQL['PASS'], $_SQL['DB']);

if ($connection->connect_error) {
  die("Connection with DB failed: " . $connection->connect_error);
}
?>
