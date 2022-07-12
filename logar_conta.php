<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Yinv Corretora de Investimentos, Invista de forma inteligente!">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo2.css">
    <link rel="icon" type="image/x-icon" href="logofav.png">
  
    <title>Yinv Co. Pagina em Criação</title>
  </head>
  <body>
          <div id="m-auto pb-5" class=" text-center align-self-center">
          <a href="index.html"><img src="logo primary.png" class="text-center m-auto" width="152px"  alt=""></a>
        </div>

       <div class="mt-5 pt-3 vidro">
    <section class="text-center align-self-center text-primary">
    <h1 class="pb-3">Login</h1>
        <form action="valida_login.php"  method="post">
            <div class="form-group">
            <input type="email" name="email" required id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" name="senha" required id="senha" placeholder="Senha">
                </div>
              <?php if (isset ($_GET['login']) && $_GET['login']=='errologin') {?>
              <div class="text-danger">
                Email ou Senha inválidos!
              </div>
            <?php }?>

            <?php if (isset ($_GET['login']) && $_GET['login']=='errosemlogin') {?>
              <div class="text-danger pb-1 p-1">
                Faça o login antes de entrar nas páginas protegidas!
              </div>
            <?php }?>

                <button class="btn btn-primary" type="submit">Logar</button>
              </form>
              
    </section>
    </div>
<section class="mt-5">
    <?php 
            if (isset ($_GET['login']) && $_GET['login']=='Email') {?>
                <section class="m-auto b-radius-50 border-radius mt-2 w-50 text-center text-white bg-info">
                <div class="p-3">
                <h4>O email digitado já consta como cadastrado em nosso banco de dados !</h4>
                <h5>Por favor efetue o login !</h5> 
                </div>
            </section>
            <?php }?>
            </section>
  
            <section class="mt-5">
            <?php 
            if (isset ($_GET['login']) && $_GET['login']=='CadastroCriado') {?>
        <section class="m-auto b-radius-50 mt-2 w-50 text-center text-white bg-success">
        <div>
          <h4>Cadastro efetuado com sucesso!</h4> 
          <h5>Por favor efetue o login !</h5>
      </div>
      </section>
      <?php }?>
    </section>

    <section class="mt-5">
            <?php 
            if (isset ($_GET['login']) && $_GET['login']=='FalhaLogin') {?>
        <section class="m-auto b-radius-50 mt-2 w-50 text-center text-white bg-secondary">
        <div>
          <h4>Falha no Login!</h4> 
          <h5>Por favor reveja o email e senha!</h5>
      </div>
      </section>
      <?php }?>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>