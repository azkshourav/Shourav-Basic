
  <?php

  // Name: Ahmmed Zubayer Karim
  
/* Question is:- 
 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
 2. 1+2+3...…….100  Write a loop to calculate the summation of the series
 */

 
 function check_even_odd($num) {
  if($num % 2 == 0) {
    return "Even";
  } else {
    return "Odd";
  }
}

$num = 5;
echo check_even_odd($num);
echo "\n";
$sum = 0;

for($i = 1; $i <= 100; $i++) {
  $sum += $i;
}
echo "The summation of the series 1 to 100 is: $sum";





  ?>
  
