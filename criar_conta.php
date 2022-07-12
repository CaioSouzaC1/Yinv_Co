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
    <header class="sticky-top mb-3">
      <nav class="navbar branco bg-light navbar-light">
        <div class="container">
          <div id="logo" class="text-center m-auto align-self-center">
          <a href="index.html"><img src="logo primary.png" class="logo" width="152px" alt=""></a>
        </div>
      </div>
      </nav>
  </header>

  <section class="pt-3 mb-5">
    <div class="m-auto text-center h-150 w-75">
        <div class="display-4 text-center">Criando conta na <span class="text-primary">Yinv Co</span></div>
        <div class="w-75 h-75 pt-3 bg-light m-auto bordacriarconta">
            <form action="cadastra_conta.php" method="post">
                <div class="m-2">
                <input required type="text" class="inputcriando" name="nome" placeholder="Seu nome completo" aria-placeholder="NOME" id="nome">
            </div>
            <div class="m-2">
                <input required type="email" class="inputcriando" placeholder="Seu email" aria-placeholder="EMAIL" name="email" id="email">
                </div>
                <div class="m-2">
                <input required type="password" class="inputcriando" placeholder="Sua senha" aria-placeholder="SENHA" name="senha" id="senha">
                </div>
                <button class="btn btn-outline-primary" type="submit">Criar Conta
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                </button>
            </form>
           
        </div>
        </div>  
    </div>
  </section>




  

  <section class="margintopmenos">
    <footer id="footer" class="pt-4 pb-4 bg-primary">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  </body>
</html>