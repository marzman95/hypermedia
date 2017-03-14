<?
// [2IO80] DBL Hypermedia group 2, TU/e 2017
  session_start();

  if(!isset($_SESSION['lang'])) {
    header("location:../?err=no_lang_in_sess");
    exit();
  } else {
    switch($_SESSION['lang']) {
      case "nl_nl":
        $_SESSION['lang'] = "en_us";
        break;
      case "en_us":
        $_SESSION['lang'] = "nl_nl";
        break;
    }
    header("location:../?suc=switched_lang");
    exit();
  }
header("location:../?err=smth_w_wrong");
exit();
?>
