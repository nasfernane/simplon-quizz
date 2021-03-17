<?php


require './php/controllers/handler.php';

$method = $_SERVER["REQUEST_METHOD"];                                                                 
$path = $_SERVER["REQUEST_URI"];    

if ($method === "GET" && $path === "/") {                                                             
    require './php/views/home.php';                                                                                           
}

elseif ($method === "POST" && $path === "/login") {                                                
    require './php/views/login.php';                                                                                          
}   