<?php

// création de la session
session_start();
$id_session = session_id();

// connexion à la bdd
try {
    $db = new PDO("mysql:host=mysql-nasfernane.alwaysdata.net;dbname=nasfernane_quizz", '216502_nasquizz', 'nasquizz');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $err) {
    die('Erreur de connexion: ' . $err->getMessage());
}