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
    <link rel="icon" type="image/x-icon" href="">
    <title>Yinv Co. Pagina em Criação</title>
  </head>
  <body>
          <div id="m-auto pb-5" class=" text-center align-self-center">
          <a href=""><img src="logo primary.png" class="text-center m-auto" width="152px"  alt=""></a>
        </div>
    <section class="text-center pt-5 text-primary"><h1>Login</h1>
        
        <form action="valida_login.php" method="post">
            <div class="form-group">
            <input type="email" name="email" id="email" placeholder="email">
            </div>
            <div class="form-group">
                <input type="password" name="senha" id="senha" placeholder="senha">
                </div>
              <?php if (isset ($_GET['login']) && $_GET['login']=='errologin') {?>
              <div class="text-danger">
                User ou senha inválidos
              </div>
            <?php }?>

            <?php if (isset ($_GET['login']) && $_GET['login']=='errosemlogin') {?>
              <div class="text-danger">
                Faça o login antes de entrar nas páginas protegidas
              </div>
            <?php }?>

                <button class="btn btn-primary" type="submit">Logar</button>
              </form>

    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>