<?php

$students = [
  "rahim",
  "karim",
  "monir",
  "shourav",
  123,
  "sayem",

];

$students[2] = "shafik";

$n = count($students);
for ($i = 0; $i < $n; $i++) {
  echo $students[$i] . "\n";
}



//--------------------Note----------------------
// PHP has 4 fun functions for data operations.
//array_shift(); // To extract data from the array
//array_unshift(); // for data entry
//array_pop(); // for data entry 
//array_push(); // To extract data from the array
//-----------------------------------------------
?>