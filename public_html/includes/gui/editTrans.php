<?php
  require('../sqlConnect.php');
?>
<html>
<meta charset="utf-8">
<head>
  <title>Edit translation</title>
</head>
<body>
  <h1>Translation text editor</h1>
  <?php
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
    } else {
      header('location:index.php?notif=id_not_set');
      exit();
    }
    $trans_query = "SELECT name, page, en_string, nl_string FROM translations WHERE id=$id";
    $rTrans = $connection->query($trans_query);
    if ($rTrans->num_rows== 0) {
      header("location:index.php?notif=id_not_exists");
      exit();
    }
    $trans_det = $rTrans->fetch_assoc();
    $page_name = $trans_det['name'];
    $page_dir = $trans_det['page'];
    $trans_nl = html_entity_decode($trans_det['nl_string']);
    $trans_en = html_entity_decode($trans_det['en_string']);
  ?>
  <a href="index.php">Go to overview</a>
  <form <?php echo " action='trans_edit.php?id=$id'"; ?> method="POST">
    <table>
      <tr>
        <td>Name:</td>
        <td>
          <input type="text" name="name" disabled <?php echo "value='$page_name'"; ?> />
          <span style="size:10pt; color:red">Name of the string: WITHOUT SPACES!</span>
        </td>
      </tr>
      <tr>
        <td>Page:</td>
        <td>
          <select name="page" disabled <?php echo "value='$page_dir'"; ?> >
          <?php
              echo "<option value='" . $page_dir . "'>" . $page_dir . "</option>";
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
          <textarea name="nl_string" rows="5" cols="100" ><?php echo $trans_nl; ?></textarea>
        </td>
      </tr>
      <tr>
        <td>English translation:<br>
          <span style="size:10pt; color:red">The English translation</span>
        </td>
        <td>
          <textarea name="en_string" rows="5" cols="100" ><?php echo $trans_en; ?></textarea>
        </td>
      </tr>
      <tr><td colspan="2" align="center"><button type="submit">Edit</td></tr>
  </form>
</body>
</html>
