<?php
require('../sqlConnect.php');
if (!isset($_GET['id'])) {
  header("location:index.php?notif=id_not_set");
  exit();
}

$id = $_GET['id'];

if ((!isset($_POST['nl_string'])) || (!isset($_POST['en_string']))) {
  header("location:editTrans.php?notif=post_null&id=$id");
  exit();
}

if (($_POST['nl_string']=="") || ($_POST['en_string']=="")) {
  header("location:editTrans.php?notif=post_empty&id=$id");
  exit();
}

$t_nl_string = htmlentities($_POST['nl_string']);
$t_en_string = htmlentities($_POST['en_string']);

echo "Updating translation in Dutch: <b>" . $t_nl_string . "</b> and English: <b>" . $t_en_string . "</b>";

$edit_query = "UPDATE translations SET en_string=?, nl_string=? WHERE id=$id";
$prepared = $connection->prepare($edit_query);
$prepared->bind_param("ss", $t_en_string, $t_nl_string);
$prepared->execute();

echo "<br><span style='color:green'><b>Record edited successfully</b></span>";

//header("location:index.php?notif=edit_success");
echo "<br><a href='index.php?notif=edit_success'>Go back</a>";
?>
