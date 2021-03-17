<?php

$method = $_SERVER["REQUEST_METHOD"];                                                                 
$path = $_SERVER["REQUEST_URI"];    
// pour mathieu
// $path = substr($_SERVER["REQUEST_URI"], 26);

if ($method === "GET" && $path === "/") {                                                             
    require './php/views/home.php';     
} else if ($method === "GET" && $path === "/?page=login") {                                                
    require './php/views/login.php';                                                                                          
} else if ($method === "GET" && $path === "/?page=signup") {                                                
    require './php/views/signup.php';
}