<?php
require('../sqlConnect.php');

if ((!isset($_POST['name'])) || (!isset($_POST['pdir']))) {
  header("location:addDir.php?notif=post_null");
  exit();
}

if (($_POST['name']=="") || ($_POST['pdir']=="")) {
  header("location:addDir.php?notif=post_empty");
  exit();
}

$d_name = strtolower(htmlspecialchars($_POST['name']));
$pdir = strtolower(htmlspecialchars($_POST['pdir']));

$last = substr($d_name, -1);
if ($last != "/") {
  $d_name = $d_name . "/";
}

$directory = $pdir . $d_name;

$query_gets = "SELECT * FROM directories WHERE directory = '$directory'";
$rGets = $connection->query($query_gets);
if ($rGets->num_rows != 0) {
  echo "Dir exists!";
  header('location:addDir.php?notif=dir_exists');
  exit();
}

echo "Adding page <b>" . $d_name . "</b> on directory <b>" . $pdir . "</b>";

$add_query = "INSERT INTO directories (directory) VALUES (?)";
$prepared = $connection->prepare($add_query);
$prepared->bind_param("s", $directory);
$prepared->execute();

echo "<br><span style='color:green'><b>Record added successfully</b></span>";

//header("location:index.php?notif=dir_add_success");
echo "<br><a href='index.php?notif=dir_add_success'>Go back</a>";
?>
