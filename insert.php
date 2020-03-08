<?php

$omote = $_POST["omote"];
$ura = $_POST["ura"];

try {
    $pdo = new PDO('mysql:dbname=tangochou;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }

$stmt = $pdo->prepare("INSERT INTO tango_table(id, omote, ura,  indate )VALUES(NULL, :omote, :ura, sysdate())");
$stmt->bindValue(':omote', $omote, PDO::PARAM_STR);
$stmt->bindValue(':ura', $ura, PDO::PARAM_STR);
$status = $stmt->execute();

if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
  }else{
    header("Location: select.php");
    exit;
  }
?>