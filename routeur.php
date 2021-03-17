<?php

$method = $_SERVER["REQUEST_METHOD"];                                                                 
$path = $_SERVER["REQUEST_URI"];    

if ($method === "GET" && $path === "/") {                                                             
    require './php/views/home.php';     
    var_dump($path);                                                                                      
}

elseif ($method === "GET" && $path === "/login") {                                                
    require './php/views/login.php';                                                                                          
}   