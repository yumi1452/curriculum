
<?php
$fruits = ["りんご" => 100,"みかん" => 30,"もも" => 1000];
$quantity = [3,5,3];

function fruitprice($fruit,$value,$quantity) {
      echo $fruit."は".$value * $quantity."円です。"."<br>";
}
$keys = array_keys($fruits);
      fruitprice($keys[0],$fruits["りんご"],$quantity[0]);
      fruitprice($keys[1],$fruits["みかん"],$quantity[1]);
      fruitprice($keys[2],$fruits["もも"],$quantity[2]);

?>

