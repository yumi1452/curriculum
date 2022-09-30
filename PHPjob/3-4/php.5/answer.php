<link rel="stylesheet" href="stylesheet.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$port = $_POST['port'];
$page = $_POST['page'];
$acquisition = $_POST['acquisition'];
$port_number = $_POST['port_number'];
$web_page = $_POST['web_page'];
$information = $_POST['information'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function anser_1() {
 if ($port == $port_number) {
 echo "正解！";
 } else {
 echo "残念・・・";
 }
}
function anser_2() {
 if ($page == $web_page) {
    echo "正解！";
 } else {
    echo "残念・・・";
 }
}
function anser_3() {
 if ($acquisition == $information) {
    echo "正解！";
 } else {
    echo "残念・・・";
 }
}
echo "<div class = hedder_1>";
?>
<p><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php anser_1();  ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php anser_2(); ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php anser_3(); 
echo "</div>";?>