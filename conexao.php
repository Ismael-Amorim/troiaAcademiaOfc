<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "ismael";
$port = 3306;

try{
    $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

    echo "Conexão realizada com sucesso";
} catch(PDOException $err){
    echo "Erro: Conezão com banco de dados não foi realizada com sucesso. Erro gerado " . $err->getMessage();
}