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
              <input  id="nome" name="nome" type="text" class="validate" placeholder="Nome">
             
            </div>
            <div class="input-field col s6">
              <input id="sobrenome" name="sobrenome" type="text" class="validate" placeholder="Sobrenome">
  
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="senha" name="senha" type="password" class="validate" placeholder="Senha">
          
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="rua" name="rua" type="text" class="validate" placeholder="Rua">
           
              </div>
              <div class="input-field col s12">
                <input id="cep" name="cep" type="text" class="validate" placeholder="Cep">
           
              </div>
              <div class="input-field col s12">
                <input id="numero" name="numero" type="text" class="validate" placeholder="numero">
              
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" name="email" type="email" class="validate" placeholder="email">
              
              </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Finalizar Cadastro
            <i class="material-icons right">send</i>
            </button>
          </form>
        </div>
      </div>
      <script>
          $(document).ready(function() {
    M.updateTextFields();
  });
        
      </script>
    </body>
  </html>