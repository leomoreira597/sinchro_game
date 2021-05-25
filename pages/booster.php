<html>

<head>
  <!--Import Google Icon Font-->
  <meta charset="utf-8" />
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
  <nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="../index.php" class="brand-logo">Synchro-Game</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      
    <!-- login e dados do usuario --> 
    <?php
        if(isset($_SESSION['userName']) || isset($_SESSION['userSobName'])){

          echo'<a href="./pages/userLogado.php"><p class="right hide-on-med-and-down">'.$_SESSION['userName'].'</p></a>';

        }else{
         
          echo'<ul class="right hide-on-med-and-down">
          <li><a href="./pages/login.html"><i class="material-icons">login</i></a></li>Login
          </ul>';
          
        }  
    ?>
      
    </div>
    
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
      <li class="tab"><a href="./deck.php">Deck</a></li>
        <li class="tab"><a href="./edicoes_especiais.php">Edições Especiais</a></li>
        <li class="tab"><a href="./booster.php">Booster</a></li>
        <li class="tab"><a href="./avulsas.php">Alvusas</a></li>
        <li class="tab"><a href="./sobre.php">Sobre</a></li>
      </ul>
    </div>
  </nav>
  <nav>
    <center><h1>Em construção</h1></center>
</body>

</html>