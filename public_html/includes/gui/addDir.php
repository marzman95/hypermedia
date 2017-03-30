<?php
  require('../sqlConnect.php');
  $dir_query = "SELECT * FROM directories";
  $rDir = $connection->query($dir_query);
  $directories = array();
  while($dir = $rDir->fetch_assoc()) {
    array_push($directories, $dir);
  }
?>
<html>
<head>
  <title>Add directory to DB</title>
</head>
<body>
  <h1>Directoy adder for DB</h1>
  <?php
    if (isset($_GET['notif'])) {
      $notif = $_GET['notif'];
      switch ($notif) {
        case "post_null":
          echo "<h3 style='color:red'>Nothing submitted!</h3>";
          break;
        case "post_empty":
          echo "<h3 style='color:red'>Fields empty!</h3>";
          break;
        case "dir_exists":
          echo "<h3 style='color:red'>The directory already exists!</h3>";
          break;
      }
  }
  ?>
  <a href="index.php">Go to overview</a>
  <form action="dir_adder.php" method="POST">
    <span style='color:red'>Without spaces!</span>
    <table border="0">
      <tr><td>Directory name:</td><td><input type="text" name="name" /></td>
        <td style="size:10pt; color:red">Name of the new folder</td></tr>
      <tr><td>Parent directory:</td><td><select name="pdir">
        <?php
        foreach ($directories as $dir) {
          echo "<option value='" . $dir['directory'] . "'>" . $dir['directory'] . "</option>";
        }
        ?>
      </td><td style="size:10pt; color:red">Parent directory</td></tr>
      <tr colspan='3'><td><button type="submit">Add</td></tr>
  </form>
</body>
</html>
