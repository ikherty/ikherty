<?php

    session_start();
    error_reporting(E_ALL);
    require 'db.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    $check_user = get_user_log_pas($login, $password);

    if($check_user->rowCount() > 0) {
        $user = $check_user->fetchAll();

        $_SESSION['user'] = [
            "id" => $user[0]['id'],
            "login"=> $user[0]['login'],
            "photo"=> $user[0]['photo']
        ];

        $id = $_SESSION['user']['id'];
        header("Location: ../account.php?id=$id");

    } else {
        $_SESSION['message'] = 'Не удалось войти ';
        header('Location: ../index.php');
    }
?>
