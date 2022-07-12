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
            <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" name="senha" id="senha" placeholder="Senha">
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>