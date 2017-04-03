<?php
  require('../sqlConnect.php');

  // Queries
  $d_query = "SELECT id, directory FROM directories";
  $rDir = $connection->query($d_query);
  $directories = array();
  while ($dir = $rDir->fetch_assoc()) {
    array_push($directories, $dir);
  }

  $p_query = "SELECT id, name, directory FROM pages";
  $rPages = $connection->query($p_query);
  $pages = array();
  while ($page = $rPages->fetch_assoc()) {
    array_push($pages, $page);
  }

  $t_query = "SELECT id, name, page, en_string, nl_string FROM translations";
  $rTrans = $connection->query($t_query);
  $translations = array();
  while ($trans = $rTrans->fetch_assoc()) {
    array_push($translations, $trans);
  }
?>
<html>
<head>
  <title>Overview of DB</title>
</head>
<body>
  <?php
  $message = "";
  if (isset($_GET['notif'])) {
    $notif = $_GET['notif'];
    switch ($notif) {
      case "dir_add_success":
        $message = "<span style='color:green'><b>Directory added successfully!</b></span>";
        break;
      case "page_add_success":
        $message = "<span style='color:green'><b>Page added successfully!</b></span>";
        break;
      case "trans_add_success":
        $message = "<span style='color:green'><b>Trans added successfully!</b></span>";
        break;
      case "del_success":
        $message = "<span style='color:green'><b>Deletion successful!</b></span>";
        break;
      case "id_not_set":
        $message = "<span style='color:red'><b>ID of item not set!</b></span>";
        break;
      case "id_not_exists":
        $message = "<span style='color:red'><b>ID not found in DB!</b></span>";
        break;
      case "blocked_root_deletion":
        $message = "<span style='color:red'><b>Cannot delete root!</b></span>";
        break;
      case "type_not_defined":
        $message = "<span style='color:red'><b>No type defined!</b></span>";
        break;
    }
  }
  echo $message;
  ?>
  <h1>Overview of the database</h1>
  <h2>Actions</h2>
  <a href="addDir.php">Add a new directory</a><br>
  <a href="addPage.php">Add a new page</a><br>
  <a href="addTrans.php">Add a new translation</a>

  <h2>Overview of directories</h2>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Directory</th>
        <th colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($directories as $dir) {
          $id = $dir['id'];
          $dirdir = $dir['directory'];
          if ($id == 1) {
            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $dirdir . "</td>";
            echo "<td colspan='2' style='color:red'>Locked!</td>";
            echo "</tr>";
          } else {
            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $dirdir . "</td>";
            //echo "<td><a href='edit.php?type=dir&id=$id'>Edit</a></td>";
            echo "<td><a href='remove.php?type=dir&id=$id'>Remove</a></td>";
            echo "</tr>";
          }
        }
       ?>
     </tbody>
   </table>
   <a href="addDir.php">Add new directory</a>

  <h2>Overview of pages</h2>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Directory</th>
        <th colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($pages as $page) {
          $id = $page['id'];
          $name = $page['name'];
          $pagedir = $page['directory'];
          if ($id == 1) {
            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $name . "</td>";
            echo "<td>" . $pagedir . "</td>";
            echo "<td colspan='2' style='color:red'>Locked!</td>";
            echo "</tr>";
          } else {
            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $name . "</td>";
            echo "<td>" . $pagedir . "</td>";
            //echo "<td><a href='edit.php?type=page&id=$id'>Edit</a></td>";
            echo "<td><a href='remove.php?type=page&id=$id'>Remove</a></td>";
            echo "</tr>";
          }
        }
       ?>
     </tbody>
   </table>
  <a href="addPage.php">Add new page</a>

  <h2>Overview of translations</h2>
  <table>
    <thead>
      <tr>
        <th width="5%">ID</th>
        <th width="5%">Name</th>
        <th width="5%">Page</th>
        <th width="40%">English</th>
        <th width="40%">Dutch</th>
        <th width="5%" colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($translations as $trans) {
          $id = $trans['id'];
          $name = $trans['name'];
          $page = $trans['page'];
          $en = html_entity_decode($trans['en_string']);
          $nl = html_entity_decode($trans['nl_string']);
          echo "<tr>";
          echo "<td>" . $id . "</td>";
          echo "<td>" . $name . "</td>";
          echo "<td>" . $page . "</td>";
          echo "<td>" . $en . "</td>";
          echo "<td>" . $nl . "</td>";
          echo "<td><a href='editTrans.php?id=$id'>Edit</a></td>";
          echo "<td><a href='remove.php?type=trans&id=$id'>Remove</a></td>";
          echo "</tr>";
        }
       ?>
     </tbody>
   </table>
  <a href="addTrans.php">Add new translation</a>
</body>
</html>
