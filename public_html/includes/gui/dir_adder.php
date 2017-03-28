<?php
require('../sqlConnect.php');

if ((!isset($_POST['name'])) || (!isset($_POST['pdir']))) {
  //header("location:addDir.php?notif=error");
  echo "Error<br>";
  exit();
}

if (($_POST['name']=="") || ($_POST['pdir']=="")) {
  //header("location:addDir.php?notif=error");
  echo "Error<br>";
  exit();
}

$d_name = strtolower(htmlspecialchars($_POST['name']));
$pdir = strtolower(htmlspecialchars($_POST['pdir']));

$last = substr($d_name, -1);
if ($last != "/") {
  $d_name = $d_name . "/";
}

echo "Adding page <b>" . $d_name . "</b> on directory <b>" . $pdir . "</b>";

$add_query = "INSERT INTO directories (directory) VALUES (?)";
$directory = $pdir . $d_name;
$prepared = $connection->prepare($add_query);
$prepared->bind_param("s", $directory);
$prepared->execute();

echo "<br><span style='color:green'><b>Record added successfully</b></span>";

//header("location:addDir.php?notif=success");
echo "<br><a href='addDir.php?notif=success'>Go back</a>";
?>
