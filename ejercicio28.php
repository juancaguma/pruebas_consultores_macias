<?php 

$Cadena = array(1,7,8,2,6,2,4,5,6,7,8,8,8);

$arr = array_count_values($Cadena);

arsort($arr);

$repetidas = reset($arr);
$numeroMasRepite = key($arr);

echo "Veces repetidas: ".$repetidas."<br>";
echo "Numero: ".$numeroMasRepite;
