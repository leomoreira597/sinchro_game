<?php
	//Precisa por causa das sessions
	session_start();

	//verificando se existe a session
	if(!isset($_SESSION['userName']) || !isset($_SESSION['userSobName'])){

		echo"<script>alert('Você não tem atorização pra estar aqui.');</script>";
		
		session_unset();//removendo todas as sessões
		session_destroy(); //destroindo a sessões

		echo"<script>location.href='../pages/login.html';</script>";

	}

	//verificando se ta vazio
	if($_SESSION['userName'] == "" || $_SESSION['userSobName'] == "" || $_SESSION['userName'] == null || $_SESSION['userSobName'] == null){

		echo"<script>alert('Você não esta logado');</script>";
		
		session_unset();//removendo todas as sessões
		session_destroy(); //destroindo a sessões

		echo"<script>location.href='../pages/login.html';</script>";

	}
?>

<html>
	<head>
		<meta charset="utf-8">
	</head>

	<body>
		
		<center><h1>Bem-vindo Usuario</h1></center>
		<br>
		<center><h1><?php echo$_SESSION['userName'];?> <?php echo$_SESSION['userSobName'];?></h1></center>

		<br><br>

		<center>
			<form action="../php/deslogarBack.php" method="POST">
				<input type="hidden" name="deslogar" value="0">
				<button>Deslogar</button>
			</form>
		</center>

	</body>

</html>