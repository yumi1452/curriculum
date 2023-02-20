<?php
require_once("getData.php");

$data = new getData();
$userData = $data ->getUserData();

$postData = $data ->getPostData();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class = "header">
        
    <img src = "1599315827_logo.png" class = "pic">
    <div class = "right">
    <div class = "up"><?php
    echo 'ようこそ '.$userData ['last_name'].$userData ['first_name'].' さん';
    ?></div>
    <div class = "down"><?php
    echo '最終ログイン日：'.$userData ['last_login'];
    ?></div></div>
    </div>
    <?php
    
      
    ?>
    <table>
    <tr class = "th">
        <th>記事ID</th>
        <th>タイトル</th>
        <th>カテゴリ</th>
        <th>本文</th>
        <th>投稿日</th>
    </tr>
    <?php
    foreach ($postData as $key){
    
    ?>
    <tr class = "td">
        <th><?php  echo $key['id']; ?></th>
        <th><?php  echo $key['title']; ?></th>
        <th><?php if ($key['category_no'] == 1) {
            echo "食事";
        } else if($key['category_no'] == 2){
            echo "旅行";
        }else{
            echo "その他";
        }
        
        ?></th>
        <th><?php  echo $key['comment']; ?></th>
        <th><?php  echo $key['created']; ?></th>
    </tr>
    <?php
    }
    ?>
    </table>

    <div class = "footer" >Y＆I group.inc</div>
</body>
</html>