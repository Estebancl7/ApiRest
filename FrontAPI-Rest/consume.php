<?php


//llamado de Nombre

$nombreCO1= $_POST['nombre1'];
$aux1 = ' ';
$aux2 = '+';
echo "Nombre Completo: $nombreCO1";
$nombreCO = str_replace ($aux1, $aux2, $nombreCO1);

echo $nombreCO;









?>
