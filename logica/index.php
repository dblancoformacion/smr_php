<h1>Ejercicos de logica de programacion</h1>


<?php

if(0)for($i=5;$i<20;$i+=2){
	//echo '<div>'.$i.'*2='.($i*2).'</div>';
	echo "<div>$i*2=".($i*2)."</div>";
	//echo '<div>'.$i.'</div>';
}

$a=[1,5,8,34,48];

foreach($a as $i){
	echo "<div>$i*2=".($i*2)."</div>";
}


$a[0] = 5;
$a[5] = 14;


echo 'El contenido de a es '.$a[0];

echo '<br/>';

echo 'El contenido de la otra es '.$a[5];