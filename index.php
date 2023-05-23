<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela_Princiapal</title>
    <link rel="stylesheet" href="css/TelaPrinciapal.css"/>
</head>
<body>
  <!-- Cabecalho -->
  <section id="header">
    <div class="header container">
        <div class="start">
            <input type="radio" name="lingua" id="Port" >Portugês 
            <input type="radio" name="lingua" id="Ing">Inglês
                
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn" type="submit">Search</button>
            </form>
        </div>
 
        <div class="tema">
            <h1>Sistema de gerencaiamento de água</h1>
        </div>

        <div class="nav-list">
          <ul>
            <li><a href="login.html" data-after="Servicos">Cliente</a></li>
            <li><a href="login.html" data-after="Projectos">Funcionario</a></li>
            <li><a href="login.html" data-after="Adim">Adim</a></li>
            <li><a href="TelaServico.html" data-after="Servico">serviços</a></li>
            <li><a href="TelaSobre.html" data-after="Sobre">Sobre</a></li>
            <li><a href="TelaContacto.html" data-after="Contactos">Contactos</a></li>
          </ul>
        </div>
    </div>
  </section>
   <!-- Fim de Cabecalho -->


   <!-- Inicio do desenvolvimento -->
  <section id="body">
    <div class="carousel">
        <div class="image-container" id="imgs">
         <img src="https://images.unsplash.com/photo-1599394022918-6c2776530abb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1458&q=80"
            alt="first-image"/>
        <img src="https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80"
            alt="second-image" />
        <img src="https://images.unsplash.com/photo-1599423300746-b62533397364?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80"
            alt="third-image" />
        <img src="https://images.unsplash.com/photo-1599561046251-bfb9465b4c44?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1492&q=80"
            alt="fourth-image" />
        </div>
  
        <div class="buttons-container">
          <button id="left" class="btn">Voltar</button>
          <button id="right" class="btn">Proximo</button>
        </div>
      </div>    

  </section>
  <!-- Fim do desevolvimento -->


  <!-- Inicio do rodapé -->
  <section id="footer">
    <div class="footer container">
        <div class="brand">
          <h2>By <span>Eng.</span>Stelio Chavana <span>&</span> Klesia Chiwissa</h2>
        </div>
        <h2>Somos a solucão dos teus problemas</h2>
        <div class="social-icon">
            <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
            <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
            <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>
        <p>Copyright © 2023 Eng.Stelio Chavana & Klesia Chiwissa. Todos direitos reservados</p>
    </div>
  </section>
  <!-- Fim do rodapé -->

  <!-- Caregamento do JavaScrib-->
  <script src="js/TelaPrincipal.js"></script>
</body>
</html>