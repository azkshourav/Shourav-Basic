<?php
function longestWord($str) {
    $str = preg_replace("/[^A-Za-z0-9 ]/", '', $str);
      $words = explode(' ', $str);
    $longestWord = '';
    foreach ($words as $word) {
    if (strlen($word) > strlen($longestWord)) {
      $longestWord = $word;
    }
  }
  return $longestWord;
}
$str = "The quick brown fox jumped over the lazy dog";
echo longestWord($str);
?>
