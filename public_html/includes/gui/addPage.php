<?php
  require('../sqlConnect.php');
  $dir_query = "SELECT DISTINCT directory FROM directories";
  $rDir = $connection->query($dir_query);
  $directories = array();
  while($dir = $rDir->fetch_assoc()) {
    array_push($directories, $dir);
  }
?>
<html>
<head>
  <title>Add page to DB</title>
</head>
<body>
  <h1>Page adder for DB</h1>
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
        case "page_exists":
          echo "<h3 style='color:red'>The page already exists!</h3>";
          break;
      }
  }
  ?>
  <a href="index.php">Go to overview</a>
  <form action="page_adder.php" method="POST">
    <span style='color:red'>Without spaces!</span>
    <table border="0">
      <tr><td>Filename:</td><td><input type="text" name="name" /></td>
        <td style="size:10pt; color:red">Filename of the page</td></tr>
      <tr><td>Directory:</td><td><select name="dir">
        <?php
        foreach ($directories as $dir) {
          echo "<option value='" . $dir['directory'] . "'>" . $dir['directory'] . "</option>";
        }
        ?>
      </td><td style="size:10pt; color:red">Directory containing the page</td></tr>
      <tr colspan='3'><td><button type="submit">Add</td></tr>
  </form>
</body>
</html>
