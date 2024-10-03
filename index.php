<?php
session_start();
if(isset($_GET['logout'])){
	session_destroy();
	session_start();
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<head>
<style>
	b{
		color:red;
	}
	body{
		font-family: Verdana;
		text-align: center;
	}
	.formulario input,button{
		margin: 5px;
		padding: 5px;
		border-radius: 15px;
		line-height: 2em;
	}
	#correo{
		color:red;
	}
	.error{
		background-color: pink;
	}
</style>
<title>login</title>
</head>
<body>

<h1>Login</h1>


<?php

if(!isset($_SESSION['id_user'])){
	if(isset($_POST['passwd'])){
		if($_POST['passwd']=='1234'){
			$_SESSION['id_user']=1;
		}
		else echo '<div class="error">Contraseña incorrecta</div>';
	}
}
if(!isset($_SESSION['id_user'])){
		echo '<form method="post" class="formulario">'
			.'<input type="email" name="user" id="correo"/>'
			.'<input name="passwd" type="password"/>'
			.'<div><button>Envía contraseña</button></div>'
			.'</form>';
}
if(isset($_SESSION['id_user'])){
	echo '<div><img src="https://images.pexels.com/photos/1320755/pexels-photo-1320755.jpeg" width="300"/><div>';
	echo '<a href="?logout=1">Cerrar sesión</a>';
}

?>
</body>
</html>