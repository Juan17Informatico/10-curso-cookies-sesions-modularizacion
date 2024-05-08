<?php  

session_start();

$users = [
    [
        "username" => "JuanCM", 
        "email" => "juan@emailxd.com"
    ],
    [
        "username" => "MR Juan", 
        "email" => "mrjuan@emailxd.com"
    ],
];


$user = $_GET["user"] ?? ""; 


// echo "EL usuario elegido es: " . $users[$user]["username"];

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];