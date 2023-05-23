<?php
    // LIGACAO A BASE DE DADOS
    include('db.php');
    // insercao
    try{ 
        $nme= $_POST['name'];
        $senha= $_POST['senha'];
        
        $sql = "INSERT INTO teste (nome, senha )
        VALUES ( '$nme', $senha)";

        $conn->exec($sql);
        echo "Usuario cadastrado com sucesso!";

    }catch (PDOException $e){
        echo $sql . "<br>" . $e->getMessage();

    }
    
    //FELHAR LIGACAO BASE DE DADOS
    include('dbclose.php');

?>