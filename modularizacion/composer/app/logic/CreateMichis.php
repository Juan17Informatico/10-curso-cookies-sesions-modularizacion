<?php
    
Use App\classes\Michi; 
Use App\classes\MichisAdoptados; 

function createMichis () {

    $mr_michi = new Michi("Trufas", "Gris", 16); 
    $mr_michi_adopted = new MichisAdoptados("Trufas", 
    new DateTime("2022-04-16"), "JuanCM"); 

    echo $mr_michi->sayMeow() . "Me adoptó {$mr_michi_adopted->getAdopted_by()}";

}