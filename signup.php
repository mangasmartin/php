<?php
if (isset($_POST['email'],$_POST['password'],$_POST['username'])) {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $pass = $_POST['pass'];
    
    if (!$email){
        //
    } else {
        $pass = password_hash($pass,PASSWORD_DEFAULT);
    
        include("config.php");
        $bd = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_HOST, DB_USER, DB_PASS);
        $res = $bd->prepare('INSERT INTO users (email,pass,username) VALUES (:email,:pass,:username)');
    
        $res->execute([
            ":email" => $email,
            ":pass" => $pass,
            ":username" => $username
        ]);

        //
    }
}