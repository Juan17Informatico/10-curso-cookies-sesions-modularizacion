<?php 


//Establecer la zona horaria
date_default_timezone_set("America/Bogota"); 

// Obtener la fecha actual
$dateNow = date("Y-m-d H:i:s");
// $dateNow2 = date_create(); 

// strtotime
// echo strtotime($dateNow); 
// echo strtotime("1 January 1970");
// echo strtotime("1+ week");
// echo strtotime("next Monday");
// echo strtotime("last Wednesday");

// $unix_time = strtotime("1 January 1970"); 
// echo date("Y-m-d H:i:s", $unix_time); 

// Fechas inmutables
$date_inmutable = new DateTimeImmutable(); 