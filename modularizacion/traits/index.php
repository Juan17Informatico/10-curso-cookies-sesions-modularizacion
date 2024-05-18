<?php 
require("vendor/autoload.php");


use App\Classes\Perritu;
use App\Classes\Michi;

// use App\Traits\Pet;


function initPerrito(){
    $firulais = new Perritu();
    echo $firulais->bark()  . "\n";
    echo $firulais->sleep() . "\n";
}

function initMichi(){
    $mrmichi = new Michi(); 
    echo $mrmichi->sayMeow() . "\n"; 
    echo $mrmichi->play()    . "\n"; 
}


initPerrito();
initMichi();