
<?php
$fruit = ["りんご" => 100,"みかん" => 30,"もも" => 1000];
$quantity = [3,5,3];

function fruitprice($quantity,$value) {

   $price = $quantity * $value;
   return $price;
}
foreach($fruit as $key => $val) 

echo $key."は".fruitprice($quantity[0],$fruit["りんご"])."円です。";
$x = fruitprice($quantity[1],$fruit["みかん"]);
$x = fruitprice($quantity[2],$fruit["もも"]);


foreach($fruit as $key => $val) 
   echo $key."は".$x."円です。";


 echo '</br>';

?>



