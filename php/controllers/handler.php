<?php

require 'dbconnect.php';
require 'auth.php';
require 'definitions.php';
require 'users.php';
require 'words.php';

$task = '';
if (array_key_exists("task", $_GET)) $task = $_GET['task'];

switch ($task) {
    case 'createuser':
        createUser();
        break;
    case 'loguser':
        logUser();
        break;
    case 'logout':
        logOut();
        break;
}




