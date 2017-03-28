<!doctype HTML>
<!-- [2IO80] DBL Hypermedia group 2, TU/e 2017 -->
<?php
  require('includes/lang_system.php');
?>
<HTML>
<head>
  <title><?php ls('title');?></title>
</head>
<body>
  <?php
  $path = $_SERVER['SCRIPT_FILENAME'];
  // Volgende werkt alleen op de wwwis-server
  $path = str_replace("/home/dblh2_2017/public_html", "/~dblh2_2017", $path);
  $_SESSION['path'] = $path;
  ?>

  <a href="includes/lang_switch.php"><?php ls('switch_language'); ?></a>
  This is a test to test a language switch system:
  <h2>Test 1 (en): <?php ls('test'); ?></h2>
  <h2>Test 2 (nl): <?php ls('test'); ?></h2>
</body>
</HTML>
