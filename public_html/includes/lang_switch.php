<?
// [2IO80] DBL Hypermedia group 2, TU/e 2017
  session_start();

  if(!isset($_SESSION['path'])) {
    header("location:../?err=no_path_specified");
    exit();
  } else {
    $path = $_SESSION['path'];
    $redirect_string = "location:" . $path;
    if(!isset($_SESSION['lang'])) {
      header($redirect_string . "?err=no_lang_in_sess");
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
      header($redirect_string . "?suc=switched_lang");
      exit();
    }
    header($redirect_string . "?err=smth_w_wrong");
    exit();
  }
  ?>