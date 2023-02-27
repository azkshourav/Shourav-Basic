<?php

// math solution for the quiz 3
// number 1 answer is given bellow
// Correct Answer will 9
// Error from OpenAI!
/*

function fun($x,$y)
{
  $x=4;
  $y=3;
  $z=$x+$y/$y+$x;
  echo "$z";
}
fun(3,4);
echo "\n";
// 5. What is the output of this code?
$numbers=array(1,2,3,4,5);
$i=0;
do {
  echo $numbers[$i];
} while ($i<count($numbers));
*/

function func( int $num ) {
  for ( $i = 1; $i <= 10; $i++ ) {
      echo "$i x $num = " . $i * $num . PHP_EOL;
  }
}

func( 2 ); echo"\n"; func( 3 );



?>

