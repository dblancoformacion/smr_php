<h1>Ejercicos de logica de programacion</h1>
<pre>

<?php

$conn = new mysqli('localhost','root','','provincias');

$ps = $conn->query("
	SELECT * FROM provincias;
")->fetch_all(MYSQLI_ASSOC);

$pob=0;
foreach($ps as $p){
	if($p['autonomia']=='Galicia')
		$pob+=$p['poblacion'];
}

echo $pob;
//print_r($ps);