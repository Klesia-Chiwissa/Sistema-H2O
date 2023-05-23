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
        $provincia= $_POST['prov'];
        $rua= $_POST['rua'];
        $cell= $_POST['cell'];
        $casa= $_POST['casa'];
        $esp= $_POST['esp'];
        $estado= $_POST['ec'];
        $funcao= $_POST['fun'];
        $funcao= $_POST['bairro'];
        $datanasc= $_POST['datanasc'];
        $dataing= $_POST['dataing'];

        $sql = "INSERT INTO usuario (id, nome, apelido, senha, email, td, sexo, provincia, rua, cell, casa, esp, estadocivel,funcao, datanasc, dataing, bairro)
        VALUES ('$id','$nome','$apelido', $senha, '$email','$td','$sexo','$provincia','$rua',$cell,$casa,'$esp','$estado','$funcao', '$datanasc','$dataing', '$bairro')";
        $conn->exec($sql);
        echo "Usuario cadastrado com sucesso!";
    }catch (PDOException $e){
        echo $sql . "<br>" . $e->getMessage();

    }
    
    //FECHAR LIGACAO BASE DE DADOS
    include('dbclose.php');

?>