<html>
<head>
  <title>Add translations to DB</title>
</head>
<body>
  <h1>Translation text adder for DB</h1>
  <?php
    if (isset($_GET['notif'])) {
      $notif = $_GET['notif'];
      switch ($notif) {
        case "success":
          echo "<h3 style='color:green'>Successfully added translation!</h3>";
          break;
        case "error":
          echo "<h3 style='color:red'>Something went wrong!</h3>";
          break;
      }
  }
  ?>
  <!--<a href="overview.php">Go to overview</a>-->
  <form action="trans_adder.php" method="POST">
    <table border="0">
      <tr><td>Name:</td><td><input type="text" name="name" /></td>
        <td style="size:10pt; color:red">Name of the string: WITHOUT SPACES!</td></tr>
      <tr><td>Page:</td><td><input type="text" name="page" /></td>
        <td style="size:10pt; color:red">URL containing the string</td></tr>
      <tr><td>Dutch translation:</td><td><input type="text" name="nl_string" /></td>
        <td style="size:10pt; color:red">The Dutch translation</td></tr>
      <tr><td>English translation:</td><td><input type="text" name="en_string" /></td>
        <td style="size:10pt; color:red">The English translation</td></tr>
      <tr colspan='3'><td><button type="submit">Add</td></tr>
  </form>
</body>
</html>
