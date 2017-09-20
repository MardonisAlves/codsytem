<?php



include("conexao/db.php");

$pdo = conexao();

$id=2;
$email="mardonisalves@gmail.com";
$senha="989578193";

$busca=$pdo->prepare("UPDATE comentario SET id=:id,email=:email,comentario=:comentario WHERE id=:id");
$busca->bindValue(":id",$id);
$busca->bindValue(":email",$email);
$busca->bindValue(":comentario",$comentario);
$busca->execute();
//echo $busca->rowCount();


?>