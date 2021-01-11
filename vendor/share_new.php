<?php
    session_start();
    error_reporting(E_ALL);
    require 'db.php';

    $text = $_POST['text'];
    $user_id = $_SESSION['user']['id'];

    $path = 'img_user_posts/'.time().$_FILES['photo']['name'];
        if(!move_uploaded_file($_FILES['photo']['tmp_name'], '../'.$path)) {
            $_SESSION['message'] = 'Ошибка при загрузке изображения';
            header("Location: ../account.php?id=$user_id");
        } 

    $sql = "INSERT INTO user_posts (`id`, `id_user`, `text`, `photo`) VALUES (NULL, '$user_id', '$text', '$path')";
    $stm = $db->prepare($sql);
    $stm->execute();

    $_SESSION['message'] = 'Запись добавлена';
    header("Location: ../account.php?id=$user_id");
?>
