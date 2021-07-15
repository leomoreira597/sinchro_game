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
        <li class="tab"><a href="./pages/deck.php">Deck</a></li>
        <li class="tab"><a href="./pages/edicoes_especiais.php">Edições Especiais</a></li>
        <li class="tab"><a href="./pages/booster.php">Booster</a></li>
        <li class="tab"><a href="./pages/avulsas.php">Alvusas</a></li>
        <li class="tab"><a href="./pages/sobre.php">Sobre</a></li>
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
        <img src="./img/indice.jpeg"> 
        <div class="caption center-align">
          <h3>Compre Aqui Suas cartas Favoritas</h3>
          <h5 class="light white-text text-lighten-3">Feito para Duelistas de verdade.</h5>
        </div>
      </li>
      <li>
        <img src="./img/indice2.jpeg"> 
        <div class="caption left-align">
          <h3>Exclusivo de Yu-Gi-Oh!</h3>
          <h5 class="light grey-text text-lighten-3">É hora do duelo.</h5>
        </div>
      </li>
    
    </ul> 
  </div>

  <div class="container">
    <div class="row">
        <!--chamando os produtos-->
        <?php

          include('./php/conect.php');  //chamando a conexao

          //comando sql armazenado nas variaveis
          $sql01 = "SELECT id_produto, nome_produto, preco, qtd_estoque, path_img FROM Produtos where id_produto = 26";
          $sql02 = "SELECT id_produto, nome_produto, preco, qtd_estoque, path_img FROM Produtos where id_produto = 27";
          $sql03 = "SELECT id_produto, nome_produto, preco, qtd_estoque, path_img FROM Produtos where id_produto = 28";
          $sql04 = "SELECT id_produto, nome_produto, preco, qtd_estoque, path_img FROM Produtos where id_produto = 29";

          //executando
          $result01 = mysqli_query($conn, $sql01);

          //exibindo
          if(mysqli_num_rows($result01) > 0){

            while($linha = mysqli_fetch_assoc($result01)){
              echo"<div class='col s3'>";
                echo"<img src='./".$linha["path_img"]."' width='200px' height='200px />'";
                echo"<p>".$linha["id_produto"]."</p>";
                echo"<p>".$linha["nome_produto"]."</p>";
                echo"<p>".$linha["preco"]."</p>";
                echo"<p>".$linha["qtd_estoque"]."</p>";
                echo"<form action='./php/compraBack.php' method='POST'>";
                  echo"<input type='hidden' name='id_produto' value=".$linha["id_produto"]." />";
                  echo"<input type='hidden' name='qtdProduto' value=".$linha["qtd_estoque"]." />";
                  echo"<button type='submit'>Comprar</button>";
                echo"</from>";  
              echo"</div>";

            } 
          }else{

            echo"<script>alert('Resultado 0, olha seu banco de dados.');</script>";

          }

          mysqli_free_result($result01);  //limpando o result01 da variavel
          $result01 = mysqli_query($conn, $sql02);

          if(mysqli_num_rows($result01) > 0){

            while($linha1 = mysqli_fetch_assoc($result01)){
              echo"<div class='col s3'>";
                echo"<img src='./".$linha1["path_img"]."' width='200px' height='200px />'";
                echo"<p>".$linha1["id_produto"]."</p>";
                echo"<p>".$linha1["nome_produto"]."</p>";
                echo"<p>".$linha1["preco"]."</p>";
                echo"<p>".$linha1["qtd_estoque"]."</p>"; 
              

              //guardando
              $testeId = $linha1["id_produto"];
              $testeQtd = $linha1["qtd_estoque"];

            }

              //botao de compra
              echo"<form action='./php/compraBack.php' method='POST'>";
                    echo"<input type='hidden' name='id_produto' value=$testeId />";
                    echo"<input type='hidden' name='qtdProduto' value=$testeQtd />";
                    echo"<button type='submit'>Comprar</button>";
              echo"</from>";

            echo"</div>";  

          }else{

            echo"<script>alert('Resultado 0, olha seu banco de dados.');</script>";

          }

          mysqli_free_result($result01);  //limpando o result01 da variavel
          $result01 = mysqli_query($conn, $sql03);  //executando

          if(mysqli_num_rows($result01) > 0){

            while($linha2 = mysqli_fetch_assoc($result01)){
              echo"<div class='col s3'>";
                echo"<img src='./".$linha2["path_img"]."' width='200px' height='200px />'";
                echo"<p>".$linha2["id_produto"]."</p>";
                echo"<p>".$linha2["nome_produto"]."</p>";
                echo"<p>".$linha2["preco"]."</p>";
                echo"<p>".$linha2["qtd_estoque"]."</p>";
                echo"<form action='./php/compraBack.php' method='POST'>";
                  echo"<input type='hidden' name='id_produto' value=".$linha2["id_produto"]." />";
                  echo"<input type='hidden' name='qtdProduto' value=".$linha2["qtd_estoque"]." />";
                  echo"<button>Comprar</button>";
                echo"</from>";  
              echo"</div>";

            } 
          }else{

            echo"<script>alert('Resultado 0, olha seu banco de dados.');</script>";

          }

          mysqli_free_result($result01);  //limpando o result01 da variavel
          mysqli_free_result($linha); //limpando a linha
          $result01 = mysqli_query($conn, $sql04);

          if(mysqli_num_rows($result01) > 0){

            while($linha3 = mysqli_fetch_assoc($result01)){
              echo"<div class='col s3'>";
                echo"<img src='./".$linha3["path_img"]."' width='200px' height='200px />'";
                echo"<p>".$linha3["id_produto"]."</p>";
                echo"<p>".$linha3["nome_produto"]."</p>";
                echo"<p>".$linha3["preco"]."</p>";
                echo"<p>".$linha3["qtd_estoque"]."</p>";
                echo"<form action='./php/compraBack.php' method='POST'>";
                  echo"<input type='hidden' name='id_produto' value=".$linha3["id_produto"]." />";
                  echo"<input type='hidden' name='qtdProduto' value=".$linha3["qtd_estoque"]." />";
                  echo"<button>Comprar</button>";
                echo"</from>";  
              echo"</div>";

            } 
          }else{

            echo"<script>alert('Resultado 0, olha seu banco de dados.');</script>";

          }


          mysqli_free_result($result01);  //limpando o result01 da variavel
          mysqli_close($conn);

        ?>

    </div>
    <!--<div class="row">
      <div class="col s3"><img src="./img/os_magos_negros.png" width="200px" height="300"/>Os Magos Negros</div>
      <div class="col s3"><img src="./img/mago_negro.jpeg" width="200px" height="300">Mago Negro</div>
      <div class="col s3"><img src="./img/cortinamn.jpeg" width="200px" height="300">Cortina De Mago Negro</div>
      <div class="col s3"><img src="./img/pequnamaga.jpeg" width="200px" height="300">Pequena Maga Negra</div>
    </div>-->


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