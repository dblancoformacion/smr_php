<h1>Ejercicos de logica de programacion</h1>
<pre>

<?php

$conn = new mysqli('localhost','root','','provincias');

$ps = $conn->query("
	SELECT * FROM provincias;
")->fetch_all(MYSQLI_ASSOC);

$pob=0;
foreach($ps as $p){
	if(strstr($p['autonomia'],'Catalu'))
		$pob+=$p['superficie'];
}

echo $pob;
//print_r($ps);

//ONTANEDAHD
//sobaosyquesadas22

// habitantes de la provincia más poblada