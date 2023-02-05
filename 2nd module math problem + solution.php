<?php

/* 
Name : Ahmmed Zubayer Karim
Subject: Assignment of Module 2

Question:- 

HF consultancy wants to build a very simple commission-calculating calculator for their Admission agents. 
Usually, the commission is twenty-five percent of the tuition fee if the tuition is above twenty thousand dollars. 
But if the tuition fee is above ten thousand dollars but less than twenty thousand dollars, the commission is twenty percent. 
If the tuition fee is less than ten thousand dollars but greater than seven thousand dollars, 
the commission rate is fifteen percent. If the tuition fee is below seven thousand dollars the data will be invalid. 
As a developer please help HF Consultancy for building this simple calculator using a ternary operator in Php.
*/

/* Answer is given bellow */



function calculateCommission($tuitionFee) {
  return $tuitionFee < 7000 ? "Invalid data" :
    ($tuitionFee < 10000 ? 0.15 * $tuitionFee :
      ($tuitionFee < 20000 ? 0.2 * $tuitionFee : 0.25 * $tuitionFee));
}

$tuitionFee = 15000;
$commission = calculateCommission($tuitionFee);
echo "The commission for a tuition fee of $tuitionFee is $commission";

?>

