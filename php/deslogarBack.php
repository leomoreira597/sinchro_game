<?php  
session_start();

function deslogar($value){

	$valorCon = intval($value); //convertendo em numero

	if($valorCon == 0){

		session_unset();//removendo todas as sessões
		session_destroy(); //destroindo a sessões

		echo"<script>alert('Você foi deslogado com sucesso!');</script>";
		echo"<script>location.href='../index.html';</script>";

	}

}

//chamando a funcao
deslogar($_POST['deslogar']);


?>