
<?php
$fruits = ["りんご" => 100,"みかん" => 30,"もも" => 1000];
$quantity = [3,5,3];
$i = 0;
foreach($fruits as $fruit => $value) {
      echo $fruit."は".gettotal($value,$quantity[$i])."円です。"."<br>";
      $i++;
}
function gettotal($tanka,$kosu){
      $total = $tanka * $kosu;
      return $total;
}
?>

