<?php
$number = $_GET['number'];

$rand_str = substr(str_shuffle($number),0,1);

?>

<p> <?php echo date("Y/m/d",time()); ?>の運勢は</p>
<p> 選ばれた数字は<?php echo $rand_str; ?></p> 

<?php

 if($rand_str == 0) {
    echo "凶";
 } elseif ($rand_str >= 1) {
    echo "小吉";
 } elseif ($rand_str >= 4) {
    echo "中吉";
 } elseif ($rand_str == 7) {
    echo "吉";
 } elseif ($rand_str == 8) {
    echo "吉";
 } else {
    echo "大吉";
 } 

?>
