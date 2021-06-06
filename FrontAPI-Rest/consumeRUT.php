<?php

// Consume el RUT

$rutdiv= $_POST['rutD'];
if ($rutdiv > 0){
    $url="http://localhost:3000/rut?rut=" . $rutdiv;

    $data = json_decode(file_get_contents($url), true);
    print_r($data['rut']);

} else {
    echo 'Parametro invalido';
}

?>