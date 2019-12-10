<?php

include '../Modelo/Weather.php';
$objWeather = new Weather();
$opcion = $_POST['opcion'];

if ($opcion == 1) {
    $retorno = $objWeather->EntregaDatos($_POST);
    echo $retorno;
} 



