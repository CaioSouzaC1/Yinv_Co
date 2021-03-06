<?php
  require "validador.php";
  ?>

  <?php 
  $chamados = array();
  $arquivoElogio = fopen('arquivoElogio.txt', 'r');    

  while(!feof($arquivoElogio)) {
    $registra = fgets($arquivoElogio);
    $chamados[] = $registra;
  }
  fclose($arquivoElogio);
  ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Yinv Corretora de Investimentos, Invista de forma inteligente!">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="estilo2.css">
    <link rel="icon" type="image/x-icon" href="logofav.png">
    <title>Yinv Co.</title>
  </head>
  <body>
    <header class="sticky-top">
      <nav class="navbar navbar-expand-lg branco navbar-light">
        <div class="container">
          <div id="logo" class="navbar-brand align-self-center">
          <a href="index.html"><img src="logo primary.png" class="logo" width="152px" alt=""></a>
        </div>
       
        <div id="criarconta" class="text-center criar mr-auto align-self-end">
          <a href="meu_perfil.php"><h4>Meu Perfil</h4></a>
        </div>
       
        <button class="navbar-toggler btn btn-outline-primary" data-toggle="collapse" data-target="#menu"> 
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="menu" class="collapse navbar-collapse">

          <ul class="navbar-nav m-auto">
            <li class="nav-item">
              <a href="meu_perfil.php" class="nav-link">Meus Investimentos
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-check" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a href="consulta_reclama.php" class="nav-link">Minhas reclama????es
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-angry" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zm6.991-8.38a.5.5 0 1 1 .448.894l-1.009.504c.176.27.285.64.285 1.049 0 .828-.448 1.5-1 1.5s-1-.672-1-1.5c0-.247.04-.48.11-.686a.502.502 0 0 1 .166-.761l2-1zm-6.552 0a.5.5 0 0 0-.448.894l1.009.504A1.94 1.94 0 0 0 5 6.5C5 7.328 5.448 8 6 8s1-.672 1-1.5c0-.247-.04-.48-.11-.686a.502.502 0 0 0-.166-.761l-2-1z"/>
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">Minhas Sugest??es
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
            </svg>
              </a>
            </li>
            <li class="nav-item">
              <a href="logoff.php" class="nav-link">Sair
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
      </nav>
  </header>

  <section>
    <div class="container">
      <div class="w-100">
        <div class="card">
          <div class="card-header">
            Consulta reclama????es
          </div>
  
          <?php foreach ($chamados as $chamado) {?>
            <?php $dados = explode('&',$chamado);
              if (count($dados)<3) {
                continue;
              }
              ?>
            <div class="card bg-light mt-1">
              <div class="card-body">
              
                <h5 class="card-title"><?=$dados[0]?></h5>
                <h6 class="card-subtitle"><?=$dados[1]?></h6>
                <p class="card-text"><?=$dados[2]?></p>
                </div>
              </div>
                <?php }?>
        </div>
      
      </div>
    </div>
  </section>

  <section class="margintop">
    <footer id="footer" class=" pt-4 pb-4 bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 text-center align-self-center pt-1"><h5 class="text-white">Acompanhe nas redes sociais</h5></div>   
          <div class="col-sm-6 text-center align-self-start pt-1">
            <a href="paginaemcriacao.html" target="_blank" class="btn btn-outline-light">
              <i class="fab fa-youtube"></i> 
          </a>
          <a href="paginaemcriacao.html" class="btn btn-outline-light ml-2">
              <i class="fab fa-twitter"></i>
          </a>
          <a href="paginaemcriacao.html" class="btn btn-outline-light ml-2">
              <i class="fab fa-instagram"></i>
          </a>
          <a href="https://github.com/CaioSouzaC1" class="btn btn-outline-light ml-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi p-auto bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
              </svg>
          </a>
          </div>
        </div>
      </div>
    </footer>
</section>
            </body>