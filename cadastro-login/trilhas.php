<?php
session_start();

// echo "<h2>Página Restrita</h2>";
// echo "Usuario Logado: " . $_SESSION['email'];
// echo "Token: " . $_SESSION['token'];

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
        <link rel="shortcut icon" href="assets\img\polvo-octofy 1.png" type="image/x-icon">
        <link rel="stylesheet" href="assets/css/area-interesse.css">
        <link rel="stylesheet" href="assets\css\header.css">
         <title>Trilhas de Conhecimento | Octofy</title> 
    </head>
    <body>

      <header>
        <nav class="nav-bar">
            <div class="Logo">
                <img id="Logo-web" src="assets/img//Logo Octofy.png" alt="">
            </div>

            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="/landing-page/landing.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="/quem-somos.html" class="nav-link">Quem Somos</a></li>
                    <li class="nav-item"><a href="/planos.html" class="nav-link">Planos</a></li>
                    <li class="nav-item"><a href="/blog/Blog.html" class="nav-link">Blog</a></li>
                  </ul>

            </div>

            <div class="login">
                <a href="http://localhost/Octofy/Octofy/login/index.php" class="nav-link">Login</a>
                <button><a href="http://localhost/Octofy/Octofy/form-cadastro/index.php">Cadastre-se</a></button>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="IMG/img header/menu.svg" alt=""></button>
            </div>

        </nav>

        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="/Octofy/Lading page/landing.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/Octofy/Quem Somos/quem-somos.html" class="nav-link">Quem Somos</a></li>
                <li class="nav-item"><a href="/octo/planos.html" class="nav-link">Planos</a></li>
                <li class="nav-item"><a href="Blog.html" class="nav-link">Blog</a></li>
              </ul>

            <div class="login">
                <a href="http://localhost/Octofy+/cadastro-login/login.php" class="nav-link">Login</a>
                <button><a href="http://localhost/Octofy+/cadastro-login/register.php">Cadastre-se</a></button>
            </div>

        </div>

    </header>

    
    <main>
      <h1>Trilhas de Conhecimento</h1>
    
      <section class="container">
        
        <div class="swiper mySwiper container">
          <div class="swiper-wrapper content">
    
            <div class="swiper-slide card">
              <div class="card-content">
                <div class="image">
                 <img class="iconss" src="assets/img/icons_área/icon_investimentos.png" alt=""> 
                </div>
    
                <div class="name-profession">
                  <span class="name">Investimentos</span>
                </div>
    
                <div class="button">
                 <a href="/cursos/invest.html"> <button class="aboutMe">Acessar</button> </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide card">
              <div class="card-content">
                <div class="image">
                  <img src="assets/img/icons_área/icon_plano.png" alt=""> 
                </div>
    
                <div class="name-profession">
                  <span class="name">Plano de Carreira</span>
                </div>
    
                <div class="button">
                <a href="/cursos/carreira.html"> <button class="aboutMe">Acessar</button></a>
                </div>
              </div>
            </div>

            <div class="swiper-slide card">
              <div class="card-content">
                <div class="image">
               <img src="assets/img/icons_área/icon_PRE.png" alt=""> 
                </div>
    
                <div class="name-profession">
                  <span class="name">Poupança e Reserva</span>
                </div>
    
                <div class="button">
                 <a href="/cursos/pre.html"> <button class="aboutMe">Acessar</button></a>
                </div>
              </div>
            </div>

            <div class="swiper-slide card">
              <div class="card-content">
                <div class="image">
                <img src="assets/img/icons_área/icon_riscos.png" alt=""> 
                </div>
    
                <div class="name-profession">
                  <span class="name">Riscos e Retornos</span>
                </div>
    
                <div class="button">
                  <a href="/cursos/riscos-retornos.html"><button class="aboutMe">Acessar</button></a>
                </div>
              </div>
            </div>

            <div class="swiper-slide card">
              <div class="card-content">
                <div class="image">
                  <img src="assets/img/icons_área/icon_finanças.png" alt=""> 
                </div>
    
                <div class="name-profession">
                  <span class="name">Planejamento Financeiro</span>
                </div>
    
                <div class="button">
                  <a href="/cursos/planejamento.html"><button class="aboutMe">Acessar</button></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide card">
              <div class="card-content">
                <div class="image">
                <img src="assets/img/icons_área/icon_objetivos.png" alt=""> 
                </div>
    
    
                <div class="name-profession">
                  <span class="name">Objetivos Financeiros</span>
                </div>
    
                <div class="button">
                  <a href="/cursos/objetivo.html"><button class="aboutMe">Acessar</button></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide card">
              <div class="card-content">
                <div class="image">
                 <img src="assets/img/icons_área/icon_tipos.png" alt="">
                </div>
    
                <div class="name-profession">
                  <span class="name">Tipos de Investimentos</span>
                  
                </div>
    
                <div class="button">
                 <a href="/cursos/tipo-investimentos.html"> <button class="aboutMe">Acessar</button></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide card">
              <div class="card-content">
                <div class="image">
               <img src="assets/img/icons_área/icon_organização.png" alt=""> 
                </div>
    
                <div class="name-profession">
                  <span class="name">Organização Financeira</span>
                  
                </div>
    
                <div class="button">
                  <a href="/cursos/organizacao.html"><button class="aboutMe">Acessar</button></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide card">
              <div class="card-content">
                <div class="image"> 
                <img src="assets/img/icons_área/icon_vida.png" alt="">
                </div>
    
                <div class="name-profession">
                  <span class="name">Vida Financeira</span>
                </div>
    
                <div class="button">
                 <a href="cursos/vida-financeira.html"> <button class="aboutMe">Acessar</button></a>
                </div>
              </div>
            </div>
    
          </div>
        </div>
    
        <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
      </section>
    
      
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
      
      <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 3,
          spaceBetween: 30,
          slidesPerGroup: 3,
          loop: true,
          loopFillGroupWithBlank: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      </script>
      <script src="js/jscript.js" type="module"></script>
    
    </main>
    </body>
</html>