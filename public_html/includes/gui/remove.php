<?php
  if (!isset($_GET['type']) || (!isset($_GET['id']))) {
    header('location:index.php?notif=id_not_set');
    exit();
  }
  require('../sqlConnect.php');

  $type = strtolower(htmlspecialchars($_GET['type']));
  $id = strtolower(htmlspecialchars($_GET['id']));

  if (($id == 1 && $type == "dir") || ($id == 1 && $type == "page")) {
    header('location:index.php?notif=blocked_root_deletion');
    //echo "Blocked because of: " . $id . " and  " . $type;
    exit();
  }

  echo "Removing <b>" . $type . "</b> for id <b>" . $id . "</b><br>";

  $table = "";
  switch ($type) {
    case "dir":
      $table = "directories";
      break;
    case "page":
      $table = "pages";
      break;
    case "trans":
      $table = "translations";
      break;
    default:
      header('location:index.php?notif=type_not_defined');
      exit();
  }

  $rem_query = "DELETE FROM $table WHERE id=$id";
  $connection->query($rem_query);

  echo "<span style='color:green'><b>Record deleted successfully</b></span>";

  //header("location:index.php?notif=del_success");
  echo "<br><a href='index.php?notif=del_success'>Go back</a>";
 ?>
