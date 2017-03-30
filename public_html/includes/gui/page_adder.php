<?php
require('../sqlConnect.php');

if ((!isset($_POST['name'])) || (!isset($_POST['dir']))) {
  header("location:addPage.php?notif=post_null");
  exit();
}

if (($_POST['name']=="") || ($_POST['dir']=="")) {
  header("location:addPage.php?notif=post_empty");
  exit();
}

$p_name = strtolower(htmlspecialchars($_POST['name']));
$p_dir = strtolower(htmlspecialchars($_POST['dir']));

$last = substr($p_name, -4);
if ($last != ".php") {
  $p_name = $p_name . ".php";
}

$query_gets = "SELECT * FROM pages WHERE directory = '$p_dir' AND name = '$p_name'";
$rGets = $connection->query($query_gets);
if ($rGets->num_rows != 0) {
  header('location:addPage.php?notif=page_exists');
  exit();
}

echo "Adding page <b>" . $p_name . "</b> on directory <b>" . $p_dir . "</b>";

$add_query = "INSERT INTO pages (name, directory) VALUES (?, ?)";
$prepared = $connection->prepare($add_query);
$prepared->bind_param("ss", $p_name, $p_dir);
$prepared->execute();

echo "<br><span style='color:green'><b>Record added successfully</b></span>";

//header("location:index.php?notif=page_add_success");
echo "<br><a href='index.php?notif=page_add_success'>Go back</a>";
?>
