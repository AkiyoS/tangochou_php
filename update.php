<?php

$omote = $_POST['omote'];
$ura = $_POST['ura'];
$id = $_POST['id'];

echo $omote;
echo $ura;
echo $id;

try {
    $pdo = new PDO('mysql:dbname=tangochou;
    charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
    exit('データベースに接続できませんでした。'.$e->getMessage());
}

$update = $pdo->prepare("UPDATE tango_table SET omote=:omote,ura=:ura,indate=sysdate() WHERE id=:id");
$update->bindValue(':omote' , $omote, PDO::PARAM_STR);
$update->bindValue(':ura' , $ura, PDO::PARAM_STR);
$update->bindValue(':id' , $id, PDO::PARAM_INT);

$status = $update->execute();

if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    header("Location: select.php");
    exit;
}

?>

