<?php
	session_start();
	function validateDir() {
  	if(!isset($_SESSION['id'])) {
  		
  		throw new Exception(header('Location: ../../index.php'));
  }
  return true;   // Retuna verdadeiro se o User estiver autenticado
}


try {
  validateDir();  //  Testa a Funçao 
  
  echo 'Ola seja bem vindo a Plataforma';
}

catch(Exception $e) { // exibe a menssagem se tudo estiver ok
  echo 'Message: ' .$e->getMessage();
}
?> 
<a href='../class/login/login.php?sair=sair'>sair</a>

