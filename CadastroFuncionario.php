<!DOCTYPE html>
<html lang="pt-pt">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de Usuarios</title>
    <link rel="stylesheet" href="css/cadastro.css">

</head>
<body>
    <!-- Layout + Formulario -->
  <div class="container col-6 mb-4">
    <h2>Cadastre-se preenchendo o formulário:</h2>
    <form action="dbCadastroUsuario.php" method="post">
        <fieldset>
            <legend><!--Cria titula dentro do formulario-->
                Dados do Funcionario
            </legend>
            <label for="id" class="form-label">ID:</label>
            <input type="int" name="id" placeholder="Digite o id:"><br>
            <br>

            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="no" placeholder="Digite seu nome"><br>

            <br>
            <label for="apelido" class="form-label">Apelido:</label>
            <input type="text" class="form-control" name="apelido" placeholder="Digite seu Apelido"><br>

            <br>
            <label for="datanasc" class="form-label">Data_Nascimento:</label>
            <input type="date" class="form-control" name="datanasc" placeholder="Digite a data de nascimeno"><br>

            <br>
            <label class="form-label">Data_Ingresso:</label>
            <input type="date" class="form-control" name="dataing" placeholder="Digite a data_ingresso"><br>

            <br>
            <label for="td" class="form-label">Tipo_Documento:</label>
            <select name="td" class="form-select">
            <option selected>Escolha</option>
            <option>BI</option>
            <option>Passaporte</option>
            <option>Carta_Condução</option>
            <option>Cartão_Eleitoral</option>
            </select><br>

            <br>
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail"><br>
        
            <br>
            <label for="password" class="form-label">Senha:</label>
            <input type="password" class="form-control" name="senha" placeholder="Digite sua senha"><br>
        
            <br>
            <label for="cell" class="form-label">Telefone:</label>
            <input type="int" class="form-control" name="cell" placeholder="Digite Telefone"> <br>

            <br>
            <label for="genero">Genero: </label> <!-- para apresentacao do genero-->
                    <input type="radio" name="sexo" id="generoM" >Mascululino 
                    <input type="radio" name="sexo" id="generoF">Fermenino <br>
            <br>
            <label for="provinca" class="form-label">Provinça:</label>
            <input type="text" class="form-control" name="prov" placeholder="Digite provinca"><br>
            <br>

            <label for="rua" class="form-label">Rua:</label>
            <input type="text" class="form-control" name="rua" placeholder="Digite sua rua"><br>
            <br>

            <label for="numero" class="form-label">Número_Casa:</label>
            <input type="text" class="form-control" name="casa" placeholder="Informe Nº Casa"><br>
            <br>
            <label for="bairro" class="form-label">Bairro:</label>
            <input type="text" class="form-control" name="bairro"><br>
            <br>
        
            <label for="esp" class="form-label">Especialidade:</label>
            <input type="text" class="form-control" name="esp" placeholder="Informe a especialidade"><br>
            <br>
            <label for="estadocivil" class="form-label">Estado cível:</label>
            <select name="ec" class="form-select">
            <option selected>Escolha</option>
            <option>Casado/a</option>
            <option>Solteiro/a</option>
            <option>viuvo/a</option>
            </select><br>
            <br>

            <label for="funcao" class="form-label">Função:</label>
            <input type="text" class="form-control" name="fun" placeholder="Informe a função"><br>
            <br>
    
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="cancelar" class="btn btn-primary">Cancelar</button>

        </fieldset>

    </form>
  </div>
    
</body>
</html>