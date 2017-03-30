<?php
  require('../sqlConnect.php');
  $pages_query = "SELECT name, directory FROM pages";
  $rPages = $connection->query($pages_query);
?>
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
        case "post_null":
          echo "<h3 style='color:red'>Nothing submitted!</h3>";
          break;
        case "post_empty":
          echo "<h3 style='color:red'>Empty fields!</h3>";
          break;
        case "trans_exists":
          echo "<h3 style='color:red'>The translation already exists!</h3>";
          break;
      }
  }
  ?>
  <a href="index.php">Go to overview</a>
  <form action="trans_adder.php" method="POST">
    <table>
      <tr>
        <td>Name:</td>
        <td>
          <input type="text" name="name" />
          <span style="size:10pt; color:red">Name of the string: WITHOUT SPACES!</span>
        </td>
      </tr>
      <tr>
        <td>Page:</td>
        <td>
          <select name="page">
            <?php
            foreach ($rPages as $page) {
              $page_url = $page['directory'] . $page['name'];
              echo "<option value='" . $page_url . "'>" . $page_url . "</option>";
            }
            ?>
          </select>
          <span style="size:10pt; color:red">URL containing the string</span>
        </td>
      </tr>
      <tr>
        <td>Dutch translation:<br>
          <span style="size:10pt; color:red">The Dutch translation</span>
        </td>
        <td>
          <textarea name="nl_string" rows="5" cols="100" ></textarea>
        </td>
      </tr>
      <tr>
        <td>English translation:<br>
          <span style="size:10pt; color:red">The English translation</span>
        </td>
        <td>
          <textarea name="en_string" rows="5" cols="100" ></textarea>
        </td>
      </tr>
      <tr><td colspan="2" align="center"><button type="submit">Add</td></tr>
  </form>
</body>
</html>
