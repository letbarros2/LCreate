<?php

$host = "localhost";
$user ="root";
$pass = "";
$dbname ="project";
$port = 3306;

try{
    // $conn = new PDO("mysql:host=$host;port=$port;dbname=" .$dbname, $user, $pass);
    // echo "<div class='alert alert-success' role='alert'> ✔ CONEXÃO  BD REALIZADA COM SUCESSO </div>";
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname,$user,$pass);

}catch(Exception $erro){
    echo "<div class ='alert alert-danger' role'alert'> ❌ CONEXÃO FALHOU </div>".$erro->getMessage();
}


?>
