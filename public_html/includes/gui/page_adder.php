<?php
require('../sqlConnect.php');

if ((!isset($_POST['name'])) || (!isset($_POST['dir']))) {
  header("location:addPage.php?notif=error");
  exit();
}

if (($_POST['name']=="") || ($_POST['dir']=="")) {
  header("location:addPage.php?notif=error");
  exit();
}

$p_name = strtolower(htmlspecialchars($_POST['name']));
$p_dir = strtolower(htmlspecialchars($_POST['dir']));

echo "Adding page <b>" . $p_name . "</b> on directory <b>" . $p_dir . "</b>";

$add_query = "INSERT INTO pages (name, directory) VALUES (?, ?)";
$prepared = $connection->prepare($add_query);
$prepared->bind_param("ss", $p_name, $p_dir);
$prepared->execute();

echo "<br><span style='color:green'><b>Record added successfully</b></span>";

//header("location:addPage.php?notif=success");
echo "<br><a href='addPage.php?notif=success'>Go back</a>";
?>
