<?php


//llamado de Nombre

$nombreCO1= $_POST['nombre1'];
$aux1 = ' ';
$aux2 = '+';
$nombreCO = str_replace ($aux1, $aux2, $nombreCO1);


$url="http://localhost:3000/nombre?nombre=" . $nombreCO;

$data = json_decode(file_get_contents($url),true);



foreach($data as $key => $value){
    echo $key . ":" . $value . "<br>";
}





?>
