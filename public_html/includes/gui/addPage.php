<?php
  require('../sqlConnect.php');
  $dir_query = "SELECT DISTINCT directory FROM pages";
  $rDir = $connection->query($dir_query);
  $directories = $rDir->fetch_assoc();
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
        case "success":
          echo "<h3 style='color:green'>Successfully added page!</h3>";
          break;
        case "error":
          echo "<h3 style='color:red'>Something went wrong!</h3>";
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
          echo "<option value='" . $dir . "'>" . $dir . "</option>";
        }
        ?>
      </td><td style="size:10pt; color:red">Directory containing the page</td></tr>
      <tr colspan='3'><td><button type="submit">Add</td></tr>
  </form>
</body>
</html>
