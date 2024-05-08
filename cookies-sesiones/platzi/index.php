<?php 

if( !isset( $_COOKIE["example_cookie"])){

    setcookie(
        "example_cookie", // name
        "un michi salvaje", // value
        time() + (60 * 60), // expires_or_options
        "platzi.com/configuracion", // path
        "localhost", // domain
        false, // secure
        true // httponly
    );

    echo "¡Cookie creada!"; 
}


echo "<pre>"; 
var_dump($_COOKIE); 
echo "</pre>"; 

?>