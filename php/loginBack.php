<?php
	
	//chamando a conexao
	require_once("conect.php");

	//guardando os emailUser e senha
	$userEmail = $_POST['emailUser'];
	$userSenha = $_POST['senhaUser'];

	//validacao se os valores estao vasio
	if($userEmail == "" || $userEmail == null){

		echo"<script>alert('o campo email esta vazio, por favor preencher ele é obrigatorio');</script>";
		echo"<script>location.href='../pages/login.html';</script>";

	}elseif ($userSenha == "" || $userSenha == null) {

		echo"<script>alert('o campo senha esta vazio, por favor preencher ele é obrigatorio');</script>";
		echo"<script>location.href='../pages/login.html';</script>";
		
	}else{

		$sql ="SELECT * FROM Usuario WHERE e_mail = '$userEmail' AND senha = '$userSenha'";
		
		//die($sql);

		$sqlExecut = mysqli_query($conn, $sql);
	
		if(mysqli_num_rows($sqlExecut) > 0 ){
	
	  while($linha = mysqli_fetch_assoc($sqlExecut)){
	
		//echo"nome: ".$linha['nome']." sobrenome: ".$linha['sobrenome'];
		$nomeUser = $linha['nome'];
		$sobNameUser = $linha['sobrenome'];
	
	  }
	  session_start();

	  $_SESSION['userName'] = $nomeUser;
	  $_SESSION['userSobName'] = $sobNameUser;

	  echo"<script>location.href='../pages/userLogado.php';</script>"; 
	
	}else{

	  echo"<script>alert('Esse usuario não existe, loga com usuario valido');</script>";
	  echo"<script>location.href='../pages/login.html';</script>";

	}
}
	
?>