<?php

try {
    $pdo = new PDO('mysql:dbname=tangochou;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }

$stmt = $pdo->prepare("SELECT * FROM tango_table ORDER BY RAND()");
$status = $stmt->execute();

if($status==false) {
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
 } else {
   $row = $stmt->fetch();
 }

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>単語帳アプリ</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="./img/memo.png">
  </head>
  <body>
    <div class="wrap">
      <section class="header">
        <div class="menu">
          <button id="menuIcon"><img src="./img/menu.png" alt="" width="40"></button>
          <button id="closeIcon" class="tg"><img src="./img/close.png" alt="" width="40"></button>
        </div>
        <div class="menuOpen" style="display:none">
          <a href="inputA.php" class="inputA">登録する</a>
          <a href="select.php" class="select">全カード</a>
          <a href="chill.php" target="_blank" class="chill">休憩する</a>
        </div>
        <div class="title">
          <h1>単語帳アプリ</h1>
        </div>
      </section>
      <section class="book">
        <div class="omoteUra">
          <p><?= $row["omote"] ?></p>
          <button class="turn">裏面を<br>みる</button>
          <p class="over" style="display:none"><?= $row["ura"] ?></p>
          <button class="next">次のカード</button>
        </div>
        <button class="reverse">逆から</button>
      </section>
      <section class="mov">
        <video preload="metadata" autoplay muted playsiline>
          <source src="./mv/MOV_1220.mp4">
        </video>
      </section>
      <section class="bImg">
        <div class="bottom">
          <p></p>
        </div>
      </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./script.js"></script>
  </body>
</html>
