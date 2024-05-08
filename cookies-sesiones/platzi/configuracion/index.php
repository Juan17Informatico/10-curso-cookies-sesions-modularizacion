<?php 

setcookie(
    "subdomain_cookie",
    "Esta cookie solo está disponible en /configuracion",
    time() + 60 * 60 * 24,
    "ruta-php-laravel/10-curso-cookies-sesions-modularizacion/cookies-sesiones/platzi/configuracion/",
    "localhost",
    false,
    true
); 


echo "<pre>"; 
var_dump($_COOKIE); 
echo "</pre>"; 

?>