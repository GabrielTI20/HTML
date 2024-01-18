<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">

  <title>Login</title>
</head>

<body>

  <!-- cria uma tela de login centralizada no meio da tela  -->
  <div class="login">
    
    <!-- cria uma borda em volta -->
    <div class="login-conteiner">

    <?php

      // $_GET -> captura as informações passada pelo o metodo GET
      //$_POST -> captura as informações passada pelo o metedo POST
      // empty -> verfifica se esta vazio
      // isset -> verifica se veriavel foi declarada


    if(isset($_GET['mensagem'])){
      echo '<h3 class="text-center mb-4">Senha ou Usuário incorreto</h3>';
    }

    ?>


      <!-- cria um titulo -->
      <H2>LOGIN</H2>


      <!-- verifica se valido o usuario -->
      <form method="POST" action="login.php">

        <!-- cria uma legenda pra preencher o "usuario" -->
        <div class="login-groupo">
          <label for="username">Usuário:</label>
          <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário">
        </div>

        <!-- cria uma legenda pra preencher o "senha" -->
        <div class="login-groupo">
          <label for="password">Senha:</label>
          <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
        </div>

        <!-- cria botao de login -->
        <div class="login-groupo">
          <button onclick="login()">Entrar</button>
        </div>
      </form>

      <!-- cria dois botão
      ->cadastro 
      >Recuperar a senha  -->
      <div class="cadastro-recuperar">
        <a href="#">Cadastrar</a> | <a href="#">Recuperar Senha</a>
      </div>


    </div>

  </div>


</body>

</html>