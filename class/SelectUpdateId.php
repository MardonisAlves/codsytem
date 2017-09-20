<?php
include("../class/conexao/db.php");

$pdo=conexao();
$id=$_GET['id'];
$busca=$pdo->prepare("SELECT * FROM comentario WHERE id = :id");
$busca->bindValue(":id",$id);
$busca->execute();

echo "	
		<div class='row col-sm-12 table-responsive' style='margin-top:50px;'>
		<form name='email' method='post' action='../class/email/email.php'>
		<table class='table-responsive'>";
		
foreach ($busca as $key => $user) {
	echo 	"<tr>
				<td>Nome</td>
				<td><input type='text' name='nome' value='$user[nome]' class='input-large'>
			</td>
			</tr>
			<tr>
				<td>Email</td>

				<td><input type='text' name='email' value='$user[email]'>

			</td>
			<tr>
			<tr>
				<td>comentario</td>
				<td><textarea cols='100' rows='4' name='sms'>$user[comentario]</textarea></td>
	      
			</tr>";
		
	
}

	echo "
	<tr>
	<td><input type='submit' value='Responder' class='btn-primary'></td>
	</tr>
	</table>
	 </div>
	 <form>";



?>