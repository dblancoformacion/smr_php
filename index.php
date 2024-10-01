<style>
	b{
		color:red;
	}
</style>

Hola <b>Mundo</b>!!

<?php

if(isset($_GET['passwd']) and $_GET['passwd']=='1234'){

	echo 'Esto es secreto';

}
else{
	echo '<form>'
		.'<input name="passwd" type="password">'
		.'<button>Envía contraseña</button>
		.</form>';
}


?>