<?php

session_start();
include_once("db_connect.php");

$errorMessage = "";
$signUpMessage = "";

if(isset($_POST["signUp"])){

    if(!empty($_POST["name"])&&!empty($_POST["password"])){

      $username = $_POST["name"];
      $password = $_POST["password"];

      $dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8',$db['host'],$db['dbname']);
    
      try{
        $pdo = new PDO($dsn,$db['user'],$db['pass'],array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $stmt = $pdo->prepare("INSERT INTO users(name,password)VALUES(?,?)");

        $stmt ->execute(array($username,password_hash($password,PASSWORD_DEFAULT)));
        $userid = $pdo->lastinsertid();
        $signUpMessage = '登録が完了しました。';
        } catch (PDOException $e) {
          $errorMessage = 'データベースエラー';
          echo $e->getMessage();
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <div><font color="black"><?php echo htmlspecialchars($signUpMessage, ENT_QUOTES); ?></font></div>
    <h1>新規登録</h1>
    <form id ="loginForm" name = "loginForm" method="POST" action="">
    <label for="username">user:</label><br>
        <input type="text" name="name" id="name" value="<?php if (!empty($_POST["name"])) {
                  echo htmlspecialchars($_POST["name"], ENT_QUOTES);
        }?>">
        <br>
        <label for="password">password:</label><br>
        <input type="password" name="password" id="password" value = ""><br>
        <input type="submit" value="submit" id="signUp" name="signUp" >
    </form>
</body>
</html>