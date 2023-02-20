<?php
$City=array("Dhaka","Kushtia","Rajshahi","Rajbari");
echo "City list : $City[0], $City[1],$City[2] and $City[3]";
 ?>



<?php
$city=array("ঢাকা","কুষ্টিয়া","খুলনা","যশোর");
echo "city list: $city[0], $city[2] এবং $city[3]";
?>


<?php
$city=array("Dhaka","khulna","Kushtia","jessore","Nator");
echo "city name: $city[0], $city[2], $city[3] and $city[4]";
?>

<?php
$City=array("DHAKA","KHULNA","KUSHTIA","JESSORE","NATOR","KUMILLA");
echo "CITY NAME: $City[0], $City[1], $City[2], $City[3] and $City[4]";
?>

<?php

$product=array("Pen","book","chocolets");
echo "Product list: $product[0], $product[1] and $product[2]";
?>


//<?php

//$cricket=array("bat","ball","Dress","shoe");
//echo "For Cricket player: $cricket[0], $cricket[1], $cricket[2] and $cricket[3] ";
//?>

<?php
$City=array("DHAKA","KHULNA","KUSHTIA","JESSORE","NATOR","KUMILLA");

foreach($City as $eachcity) {

  echo "$eachcity". "\n";

}
?>