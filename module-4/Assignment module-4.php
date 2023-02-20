<?php

/*

Name: Ahmmed Zubayer Karim.
Subjecet: Assignment module-4

*/

//Question:- 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
// Answer is given below:
function sortByStrLength( array $string ): array
{
    usort( $string, function ( $a, $b ) {
        return strlen( $a ) - strlen( $b );
    } );
    return $string;
}

$fruits = array( 'apple', 'banana', 'orange', 'kiwi', 'grape', 'mango' );
print_r( sortByStrLength( $fruits ) );

echo "\n\n"; 
// Output is: 
// Array
// (
//     [0] => kiwi
//     [1] => apple
//     [2] => grape
//     [3] => mango
//     [4] => banana
//     [5] => orange
// )

// Question: 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
// Answer is given below:

function concatenate_strings($str1, $str2) {
  $len1 = strlen($str1);
  $len2 = strlen($str2);
  $overlap = 0;
  for ($i = 1; $i <= $len1 && $i <= $len2; $i++) {
      if (substr($str1, -$i) == substr($str2, 0, $i)) {
          $overlap = $i;
      }
  }
  return $str1 . substr($str2, $overlap);
}

$string1 = "Hello";
$string2 = "world!";
$concatenated = concatenate_strings($string1, $string2);

echo $concatenated; // Outputs "Helloworld!"


//Question: 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
// Answer is given below:

function remove_fl_element($arr){
  array_shift($arr);
  array_pop($arr);
  return $arr;
}
$array = ['Rakib','Hassan','Sohel','Rabbi','limon','Shuvo','Humyun'];
$arrView = remove_fl_element($array);
print_r($arrView);
echo PHP_EOL;  

// Output is : 

// Array
// (
//     [0] => Hassan
//     [1] => Sohel
//     [2] => Rabbi
//     [3] => limon
//     [4] => Shuvo
// )



//Question: 4.Write a PHP function to check if a string contains only letters and whitespace.
// Answer is given below:

function contains_only_letters_and_whitespace($str) {
  return preg_match('/^[a-zA-Z\s]+$/',$str);
}

$str1 = "Hello world";
$str2 = "219";
if(contains_only_letters_and_whitespace($str1)){
    echo "String 1 contains only letters and whitespace\n";
}else{
    echo "String 1 contains non-letter or non-whitespace characters\n";
}
if(contains_only_letters_and_whitespace($str2)){
    echo "String 2 contains only letters and whitespace\n";
}else{
    echo "String 2 contains non-letter or non-whitespace characters\n";
}

// Output is :

// String 1 contains only letters and whitespace
// String 2 contains non-letter or non-whitespace characters


//Question: 5.Write a PHP function to find the second largest number in an array of numbers.
// Answer is given below:

function largestSecondNumber( array $number ): int {
  rsort( $number );
  return $number[1];
}
$number = array( 222, 14, 450, 72, 34, 555 );
echo "The largest second number is " . largestSecondNumber( $number );

//output is: The largest second number is 450



?>
