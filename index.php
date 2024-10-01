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

<style>
	b{
		color:red;
	}
</style>

Hola <b>Mundo</b>!!

<?php

if(!isset($_SESSION['id_user'])){
	if(isset($_POST['passwd']) and $_POST['passwd']=='1234'){
		$_SESSION['id_user']=1;
	}
	else{
		echo '<form method="post">'
			.'<input name="passwd" type="password">'
			.'<button>Envía contraseña</button>
			.</form>';
	}
}
if(isset($_SESSION['id_user'])){
	echo '<div><img src="https://images.pexels.com/photos/1320755/pexels-photo-1320755.jpeg" width="300"/><div>';
	echo '<a href="?logout=1">Cerrar sesión</a>';
}

?>