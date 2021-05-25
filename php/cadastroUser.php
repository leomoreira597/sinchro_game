<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css--> <div class="slider">
    
    <link type="text/css" rel="stylesheet" href="../css/materialize.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
    body{
    background-color: rgb(199, 197, 197);
    }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form class="col s12" action="cadastroBack.php" method="POST">
          <div class="row">
            <div class="input-field col s6">
              <input  id="nome" name="nome" type="text" class="validate">
              <label for="nome">Nome</label>
            </div>
            <div class="input-field col s6">
              <input id="sobrenome" name="sobrenome" type="text" class="validate">
              <label for="sobrenome">Sobrenome</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="senha" name="senha" type="password" class="validate">
              <label for="senha">Senha</label>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="rua" name="rua" type="text" class="validate">
                <label for="Rua">Rua</label>
              </div>
              <div class="input-field col s12">
                <input id="cep" name="cep" type="text" class="validate">
                <label for="Cep">Cep</label>
              </div>
              <div class="input-field col s12">
                <input id="numero" name="numero" type="text" class="validate">
                <label for="numero">Numero</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" name="email" type="email" class="validate">
                <label for="email">E-mail</label>
              </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Finalizar Cadastro
            <i class="material-icons right">send</i>
            </button>
          </form>
        </div>
      </div>
    </body>
  </html>