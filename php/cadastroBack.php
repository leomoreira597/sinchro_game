<?php

  //Chamando a pagina de conexao
  include_once("conect.php");

  //obejetos sql guardando cmd sql
  $sql = "INSERT INTO usuario(
      nome,
      sobrenome,
      e_mail,
      senha,
      rua,
      cep,
      numero
  )VALUES(
      '".$_POST['nome']."',
      '".$_POST['sobrenome']."',
      '".$_POST['email']."',
      '".$_POST['senha']."',
      '".$_POST['rua']."',
      '".$_POST['cep']."',
      '".$_POST['numero']."'
  )";

  if (mysqli_query($conn, $sql)){
    echo "<script>alert('Cadastro Realizado com sucesso');</script>";
    echo"<script>location.href ='../pages/login.html';</script>";
  }
  else{
    echo"<script>alert(' Erro:". $sql. "  " . mysqli_error($conn)."')</script>";
  }

  //error_reporting(E_ALL);

  mysqli_close($conn);

?>