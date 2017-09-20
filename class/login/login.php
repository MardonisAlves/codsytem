<?php

require_once("../conexao/db.php");

class login{

 public function construct(){

$pdo=conexao();
$busca=$pdo->prepare("SELECT * FROM user");
$busca->execute();

if(!isset($_GET['sair'])){
foreach ($busca as $key => $user) {
	
	if($user['email'] == $_POST['email']   AND  $user['senha'] == $_POST['senha']){

		/*Ainda falta criar as sessions para logar de forma correta*/
		session_start();
		echo $_SESSION['email']=$user['email'];
		echo $_SESSION['id']=$user['id'];
		header('Location: /../../../admin');

	}else{
		header('Location: ../../index.php');
	}
	

}
}
}
public function sair(){
	if(isset($_GET['sair'])){
	session_start();
	session_destroy();
	header('Location: ../../index.php');
}
}
}
$login = new login();
$login->construct();
$login->sair($_GET['sair']);
?>