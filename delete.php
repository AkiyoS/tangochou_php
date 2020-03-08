<?php

$id = $_GET['id'];

try {
    $pdo = new PDO('mysql:dbname=tangochou;
    charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
    exit('データベースに接続できませんでした。'.$e->getMessage());
}

$sql = 'DELETE FROM tango_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id' , $id, PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    header("Location: select.php");
    exit;
}

?>