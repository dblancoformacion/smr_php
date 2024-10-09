<form>
<input name="dato"/>
<button>Enviar</button>
</form>
<?php

if(isset($_GET['dato'])){
	if(md5($_GET['dato'])=='98ce3010caf21876324addaf1a0f4aa2'){
		echo '¡¡¡Has entrado!!!';
	}
	else{
		echo 'Contraseña incorrecta';
	}
}