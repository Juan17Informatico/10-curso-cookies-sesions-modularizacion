<?php 

require("classes/michisDisponibles/Michi.php");
require("classes/michisAdoptados/Michi.php");
use MichisDisponibles\Michi ; 
use MichisAdoptados\Michi as MichisAdoptados; 


$mrmichi = new Michi("Mr. michi", "Blanquito", 16); 
$sancio = new  Michi("sancio", "Amarillo", 5); 
$trufas = new  Michi("Trufas", "Gris", 7); 

$paraAdopt = new  MichisAdoptados("Federico", new DateTime("2022-04-20"), "lina"); 
$paraAdopt2 = new  MichisAdoptados("Ferre", new DateTime("2022-06-04"), "juan"); 
$paraAdopt3 = new  MichisAdoptados("Mirro", new DateTime("2022-12-01"), "yo"); 