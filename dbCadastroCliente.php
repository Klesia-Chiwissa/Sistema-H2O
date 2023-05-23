<?php
    // LIGACAO A BASE DE DADOS
    include('db.php');
    // insercao
    try{ 
        $id= $_POST['id'];
        $nome= $_POST['no'];
        $apelido= $_POST['apelido'];
        $senha= $_POST['senha'];
        $email= $_POST['email'];
        $td= $_POST['td'];
        $sexo= $_POST['sexo'];
        $naturalidade= $_POST['nat'];
        $nacionalidade= $_POST['nac'];
        $rua= $_POST['rua'];
        $cell= $_POST['cell'];
        $casa= $_POST['casa'];
        $estado= $_POST['ec'];
        $funcao= $_POST['bairro'];
        $datanasc= $_POST['datanasc'];
        $dataing= $_POST['dataing'];

        $sql = "INSERT INTO cliente (id, nome, apelido, senha, email, td, sexo, nacionalidade, rua, cell, casa, esp, estadocivel,naturalidade, datanasc, dataing, bairro)
        VALUES ('$id','$nome','$apelido', $senha, '$email','$td','$sexo','$nacionalidade','$rua',$cell,$casa,'$esp','$estado','$naturalidade', '$datanasc','$dataing', '$bairro')";
        $conn->exec($sql);
        echo "Usuario cadastrado com sucesso!";
    }catch (PDOException $e){
        echo $sql . "<br>" . $e->getMessage();

    }
    
    //FECHAR LIGACAO BASE DE DADOS
    include('dbclose.php');

?>