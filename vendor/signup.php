<?php

    session_start();
    require 'db.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $users = get_all_users();
    foreach ($users as $user) {
        if($user['login'] == $login) {
            $_SESSION['message'] = 'Пользователь с таким логином уже существует';
            header('Location: ../register.php');
        }

        $sql = "INSERT INTO users VALUES (NULL, '$login', '$password', '$email')";
        $stm = $db->prepare($sql);
        $stm->execute();

        $_SESSION['message'] = 'Регистрация прошла успешно';
        header('Location: ../index.php');
    }
?>