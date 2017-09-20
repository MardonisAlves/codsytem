<?php

/*conexao com bd com a classe PDO::*/

define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');
define('DB_DATABASE', 'test');

function conexao(){

try{
    $pdo = new PDO(DB_DRIVER.':host='.DB_HOST.';dbname='.DB_DATABASE, DB_USER, DB_PWD);
}
catch(PDOException $se){

 echo  $se->getMessage(); // mostrar  um error na conexao

}
return $pdo;

}




  
  
?>
