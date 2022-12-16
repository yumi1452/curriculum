<link rel="stylesheet" href="stylesheet.css">
<?php
 echo "<div class = hedder_1>";
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$number = [80,22,20,21];
$language = ["PHP","Python","JAVA","HTML"];
$command = ["join","select","insert","update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$port_number = 80;
$web_page = "HTML";
$information = "select";
?>

<form action="answer.php" method = "post">
<p>お疲れ様です<?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($number as $value) {  ?>
    <input type="radio" name="port" value="<?php echo $value;?>"><?php echo $value;?>
<?php }?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($language as $value) { ?>
    <input type="radio" name="page" value="<?php echo $value; ?>"><?php echo $value;?>
<?php }?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($command as $value) { ?>
    <input type="radio" name="acquisition" value="<?php echo $value; ?>"><?php echo $value;?>
<?php
}
echo '<br>';

?>


<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <input type="hidden" name="port_number" value="<?php echo $port_number; ?>">
    <input type="hidden" name="web_page" value="<?php echo $web_page; ?>">
    <input type="hidden" name="information" value="<?php echo $information; ?>">
    <input type="hidden" name="my_name" value="<?php echo $my_name; ?>">
    <input type="submit" value="回答する"/>
 </form>
<?php echo "</div>"; ?>
