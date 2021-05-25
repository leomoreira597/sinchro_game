<html>
<?php
    session_start();  //iniciando a sessão
?>
<head>
  <!--Import Google Icon Font-->
  <meta charset="utf-8" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css--> <div class="slider"> 
  <link type="text/css" rel="stylesheet" href="./css/materialize.css" media="screen,projection" />
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

          echo'<p class="right hide-on-med-and-down">'.$_SESSION['userName'].'</p>';

        }else{
         
          echo'<ul class="right hide-on-med-and-down">
          <li><a href="./pages/login.html"><i class="material-icons">login</i></a></li>Login
          </ul>';
          
        }  
    ?>
      <!--<ul class="right hide-on-med-and-down">
        <li><a href="./pages/login.html"><i class="material-icons">login</i></a></li>Login
      </ul>-->

    
    
    </div>
    
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="./pages/deck.html">Deck</a></li>
        <li class="tab"><a href="./pages/edicoes_especiais.html">Edições Especiais</a></li>
        <li class="tab"><a href="./pages/booster.html">Booster</a></li>
        <li class="tab"><a href="./pages/avulsas.html">Alvusas</a></li>
        <li class="tab"><a href="./pages/sobre.html">Sobre</a></li>
      </ul>
    </div>
  </nav>
  <nav>
    <div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>

  <div class="slider">
    <ul class="slides">
      <li>
        <img src="https://lorempixel.com/580/250/nature/1"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul> 
  </div>

  <div class="container">
    <div class="row">
      <div class="col s3"><img src="./img/os_magos_negros.png" width="200px" height="300"/>Os Magos Negros</div>
      <div class="col s3"><img src="./img/mago_negro.jpeg" width="200px" height="300">Mago Negro</div>
      <div class="col s3"><img src="./img/cortinamn.jpeg" width="200px" height="300">Cortina De Mago Negro</div>
      <div class="col s3"><img src="./img/pequnamaga.jpeg" width="200px" height="300">Pequena Maga Negra</div>
    </div>
    <div class="row">
      <div class="col s3"><img src="./img/almas_dos_magos.png"width="200px" height="300">Almas Dos Magos</div>
      <div class="col s3"><img src="./img/draggon_negro_de_olhos_vermelhos.png"width="200px" height="300"/>Dragoon Negro De Olhos Vermelhos</div>
      <div class="col s3"><img src="./img/endymion.png"width="200px" height="300"/>Endymion, O Poderoso Mestre Da Magia</div>
      <div class="col s3"><img src="./img/reflexo_de_endymion.png"width="200px" height="300"/>Reflexo de Endymion</div>
    </div>
    <div class="row">
      <div class="col s3"><img src="./img/Magistrado_de_endymion.png"width="200px" height="300">Magistrado De Endymion</div>
      <div class="col s3"><img src="./img/serva_de_endymion.png"width="200px" height="300">Serva De Endymion</div>
      <div class="col s3"><img src="./img/Ladino_de_endymion.jpeg"width="200px" height="300">Ladino De Endymion</div>
      <div class="col s3"><img src="./img/crusado_de_endymion.jpeg"width="200px" height="300">Crusado De Endymion</div>
    </div>
  </div>


<script type="text/javascript" src="./js/materialize.min.js"></script>

  <script> 
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.slider');
      var instances = M.Slider.init(elems);
      instances.start();
    });
  </script>
  
</body>

</html>