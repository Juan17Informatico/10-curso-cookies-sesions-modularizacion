<?php 

try{

    $resultado = 20/0; 
    echo $resultado; 

}catch(Throwable $e){

    // echo $e->getMessage(); 
    echo "Ups, ocurrió un error inesperado con tu división"; 

}


echo "<br>"; 

echo "Esto pasa sí o sí"; 

