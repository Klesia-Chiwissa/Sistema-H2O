<?php
     // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "basedados";

    try{
        $conn = new PDO("mysql:host=$servername; dbname=basedados", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connectado com sucesso!";
    }catch(PDOExeception $e) {
        echo "Connectado com sucesso! " .$e->getMessage();
    }
?> 