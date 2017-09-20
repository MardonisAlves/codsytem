<?php
include('conexao/db.php');
error_reporting(0);
header("Access-Control-Allow-Origin: *");   
header("Content-Type: application/json; charset=UTF-8"); 

$conn = conexao();   
$result = $conn->query("SELECT * FROM comentario order by id");     
$outp = ""; 
while($rs = $result->fetch()) {     
    if ($outp != "") {$outp .= ",";}     
    $outp .= '{"id":"'  . $rs["id"] . '",'; 
    $outp .= '"nome":"'   . $rs["nome"]  . '",'; 
    $outp .= '"email":"'   . $rs["email"]  . '",'; 
    $outp .= '"comentario":"'. $rs["comentario"]  . '"}'; 
    } 
$outp ='{"details":['.$outp.']}'; 
echo($outp); 


?>