<h1>Ejercicos de logica de programacion</h1>
<pre>

<?php

$conn = new mysqli('localhost','root','','provincias');

$ps = $conn->query("
	SELECT * FROM provincias;
")->fetch_all(MYSQLI_ASSOC);

foreach($ps as $p){
	if($p['provincia']=='Asturias')
		echo $p['superficie'].' km2';
}


//print_r($ps);