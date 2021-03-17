<?php

$method = $_SERVER["REQUEST_METHOD"];                                                                 
$path = $_SERVER["REQUEST_URI"];    
// pour mathieu
// $path = substr($_SERVER["REQUEST_URI"], 26);

if ($method === "GET" && $path === "/") {                                                             
    require './php/views/home.php';     
    var_dump($path);                                                                                      
}

elseif ($method === "GET" && $path === "/?page=login") {                                                
    require './php/views/login.php';                                                                                          
}   