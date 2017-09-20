<?php
$to = "mardonisgp@gmail.com";
$subject = "Code";
$txt = $_POST["comentario"];

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers = "From:".$_POST['email']. "\r\n"."CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);

include("conexao/db.php");
$pdo = conexao();

$id=null;
$busca=$pdo->prepare("INSERT INTO comentario (id,nome,email,comentario)VALUES(:id,:nome,:email,:comentario)");
$busca->bindValue(":id",$id);
$busca->bindParam(":nome",$_POST['nome']);
$busca->bindParam(":email",$_POST['email']);
$busca->bindParam(":comentario",$_POST['comentario']);
$busca->execute();

header("Location: ../index.php");


?>