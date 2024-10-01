<?php
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

if(isset($_GET['passwd']) and $_GET['passwd']=='1234'){

	echo '<div><img src="https://images.pexels.com/photos/1320755/pexels-photo-1320755.jpeg" width="300"/><div>';

}
else{
	echo '<form>'
		.'<input name="passwd" type="password">'
		.'<button>Envía contraseña</button>
		.</form>';
}


?>