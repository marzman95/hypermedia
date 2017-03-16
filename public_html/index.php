<!doctype HTML>
<!-- [2IO80] DBL Hypermedia group 2, TU/e 2017 -->
<?
  require('includes/lang_system.php');
?>
<HTML>
<head>
  <title><? ls('title');?></title>
</head>
<body>
  <?
  $path = $_SERVER['SCRIPT_FILENAME'];
  $path = str_replace("/home/dblh2_2017/public_html", "/~dblh2_2017", $path);
  $_SESSION['path'] = $path;
  ?>

  <a href="includes/lang_switch.php"><? ls('switch_lang'); ?></a>
  This is a test to test a language switch system:
  <h2>Test 1 (en): <? ls('first_string'); ?></h2>
  <h2>Test 2 (nl): <? ls('first_string'); ?></h2>
</body>
</HTML>
