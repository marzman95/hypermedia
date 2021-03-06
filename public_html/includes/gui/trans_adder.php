<?php
require('../sqlConnect.php');

if ((!isset($_POST['name'])) || (!isset($_POST['page'])) || (!isset($_POST['nl_string'])) || (!isset($_POST['en_string']))) {
  header("location:addTrans.php?notif=post_null");
  exit();
}

if (($_POST['name']=="") || ($_POST['page']=="") || ($_POST['nl_string']=="") || ($_POST['en_string']=="")) {
  header("location:addTrans.php?notif=post_empty");
  exit();
}

$t_name = strtolower(htmlspecialchars($_POST['name']));
$t_page = strtolower(htmlspecialchars($_POST['page']));
$t_nl_string = htmlentities(htmlspecialchars($_POST['nl_string']));
$t_en_string = htmlentities(htmlspecialchars($_POST['en_string']));

$query_gets = "SELECT * FROM translations WHERE name = '$t_name'";
$rGets = $connection->query($query_gets);
if ($rGets->num_rows != 0) {
  header('location:addTrans.php?notif=trans_exists');
  exit();
}

echo "Adding translation for <b>" . $t_name . "</b> on page <b>" . $t_page . "</b>";
echo " With Dutch: <b>" . $t_nl_string . "</b> and English: <b>" . $t_en_string . "</b>";

$add_query = "INSERT INTO translations (name, page, en_string, nl_string) VALUES (?, ?, ?, ?)";
$prepared = $connection->prepare($add_query);
$prepared->bind_param("ssss", $t_name, $t_page, $t_en_string, $t_nl_string);
$prepared->execute();

echo "<br><span style='color:green'><b>Record added successfully</b></span>";

//header("location:index.php?notif=trans_add_success");
echo "<br><a href='index.php?notif=trans_add_success'>Go back</a>";
?>
