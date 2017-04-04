<?php
// File for search handling
// TO DEBUG: Comment out echoes and print_r()'s
require('sqlConnect.php');
require('searchFunctions.php');
//session_start();

function search($input) {
  global $connection;
  $searchDataRaw = $input;
  $searchDataUsed = strtolower($searchDataRaw);
  // echo "Entered search action: <b>" . $searchDataRaw . "</b><br>";
  // echo "Fetching translation-texts...<br>";
  $query_texts = "SELECT id, page, en_string, nl_string FROM translations";
  $rTexts_raw = $connection->query($query_texts);
  // echo "Raw result meta-data: ";
  // print_r($rTexts_raw);
  // echo "<br>Creating array with translations...<br>";

  $texts = array();
  foreach ($rTexts_raw as $row) {
    array_push($texts, $row);
  }

  $lang = $_SESSION['lang'];
  switch ($lang) {
    case "en_us":
      $lang_string = "en_string";
      $language = "English";
      break;
    case "nl_nl":
      $lang_string = "nl_string";
      $language = "Nederlands";
      break;
  }

  //echo "<h3>Searching " . $language . "</h3>";
  $searchResults = array();
  foreach ($texts as $trans_data) {
    $id = $trans_data['id'];
    $page = $trans_data['page'];
    $stripped_text = stripTags($trans_data[$lang_string]);
    $count = countSearch($stripped_text, $searchDataUsed);
    // echo "<b>New text (" . $count . "):</b> " . $stripped_text . "<br>";
    $searchResults[$id] = array("page" => $page, "count" => $count);
  }

  // echo "<h3>Results</h3>";
  // print_r($searchResults);
  //
  // echo "<h3>Sorted and filtered</h3>";
  $filtered = filterResults($searchResults);
  // print_r($filtered);
  // echo "<br><br>";
  $sorted = sortResults($filtered);
  // print_r($sorted);
  // echo "<br><br>";
  $total = "";
  foreach ($sorted as $result) {
    // For folder-based use: $url = ".." . $result['page'];
    $url = ltrim($result['page'], '/');
    $title = page_title($url);
    $page = "<a href='" . $url . "' class='searchLink'>" . $title . "</a>";
    ob_start();
    ls("occurrences");
    $occur = ob_get_contents();
    ob_clean();
    $total = $total . $page . " (" . $result['count'] . " " . $occur . ")<br>";
  }
  if ($total == "") {
    ob_start();
    ls("no_results");
    $no_results = ob_get_contents();
    ob_clean();
    $total = "<h3 style='color:red'>" . $no_results . "</h3>";
  }
  return $total;
}
?>
