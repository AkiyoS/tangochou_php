<?php

try {
  $pdo = new PDO('mysql:dbname=tangochou;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

$stmt = $pdo->prepare("SELECT * FROM tango_table");
$status = $stmt->execute();

$view="";
if($status==false) {
 $error = $stmt->errorInfo();
 exit("ErrorQuery:".$error[2]);

} else {
 while( $res = $stmt->fetch(PDO::FETCH_ASSOC)){
  
  $view .='<form class="slct" action="update.php" method="post">';
  $view .= '<input type="text" name="omote" id="omote" value='.$res["omote"].'>';
  $view .= '<input type="text" name="ura" id="ura" value='.$res["ura"].'>';
  $view .= '<input type="hidden" name="id" value='.$res['id'].'>';
  $view .= '<button class="sb"><img src="./img/ud.png" width="36px"></button><a href="delete.php?id='.$res["id"].'" class="sb dlt"><img src="./img/trash.png" width="36px"></a>';
  $view .= '</form>';
 }
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>一覧-単語帳アプリ</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="./img/memo.png">
  </head>
  <body>
    <div class="wrap">
      <section class="slctHeader">
        <div class="menu">
          <button id="menuIcon"><img src="./img/menu.png" alt="" width="40"></button>
          <button id="closeIcon" class="tg"><img src="./img/close.png" alt="" width="40"></button>
        </div>
        <div class="menuOpen" style="display:none">
          <a href="index.php" class="index">学習する</a>
          <a href="inputA.php" class="inputA">登録する</a>
          <a href="chill.php" target="_blank" class="chill">休憩する</a>
        </div>
        <div class="slctTitle">
          <h1>すべてのカード</h1>
        </div>
      </section>
      <div class="viewAll">
          <?= $view ?>
      </div>
    </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="./script.js"></script>
  </body>
</html>