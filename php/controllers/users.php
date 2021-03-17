<?php

function createUser () {
    global $db;

    // récupération des informations et hashage du mot de passe
    $email = $_POST['email'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordconfirm'];

    if ($password === $passwordConfirm) $encryptedPassword = password_hash($password, PASSWORD_BCRYPT);

    // insertion nouvel utilisateur
    $createUser = $db->prepare("
        INSERT INTO 
        utilisateurs (email, name, password)
        VALUES (:email, :name, :password)
    ");

    // execution de la requête
    $createUser->execute(array(
        ':email' => $email,
        ':name' => $user,
        ':password' => $encryptedPassword
    ));

    // redirige vers la page de connexion
    header('location: /?page=login');
    exit;

}