<?php

include("conexao/db.php");
$pdo = conexao();

$id = $_GET['id'];
$busca=$pdo->prepare("DELETE FROM comentario WHERE id=:id");
$busca->bindValue(":id",$id);
$busca->execute();

header("Location: ../admin/sms.php");

?>