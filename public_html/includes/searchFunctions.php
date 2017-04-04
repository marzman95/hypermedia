<?php
  function stripTags($rawText) {
    $html_text = html_entity_decode(html_entity_decode(strtolower($rawText)));
    $stripped = strip_tags($html_text);
    return $stripped;
  }

  function countSearch($text, $search) {
    $counter = substr_count($text, $search);
    return $counter;
  }

  function filterResults($results) {
    foreach ($results as $result => $resValue) {
      if ($resValue['count'] == 0) {
        unset($results[$result]);
      }
    }
    return $results;
  }

  function sortResults($filtered) {
    $count = array();
    foreach ($filtered as $key=>$value) {
      $count[$key] = $value['count'];
    }
    array_multisort($count, SORT_DESC, $filtered);
    return($filtered);
  }

  function page_title($url) {
        $fp = file_get_contents($url);
        if (!$fp)
            return null;

        $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
        if (!$res)
            return null;

        // Clean up title: remove EOL's and excessive whitespace.
        $title = preg_replace('/\s+/', ' ', $title_matches[1]);
        $title = trim($title);
        return $title;
    }
 ?>
