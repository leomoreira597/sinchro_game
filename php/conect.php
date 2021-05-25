<?php
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "fs1lm3gl5tt";
$nomeBd = "Synchro";

// Create connection
$conn = mysqli_connect($nome_servidor, $nome_usuario , $senha, $nomeBd);

// Check connection
if(!$conn){

  die("Connection failed: " . mysqli_connect_error());

}

?>