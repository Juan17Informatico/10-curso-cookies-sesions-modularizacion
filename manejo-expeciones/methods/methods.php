<?php 

function division(){
    return 20 / 0; 
}

try{

    $resultado = division(); 
    // echo $resultado; 

}catch(Exception $e){
    // echo $e->getMessage();
    // echo $e->getCode();
    // echo $e->getFile();
    // echo $e->getLine();
    echo "<pre>";
    var_dump($e->getTrace()); 
    echo "</pre>";

}

