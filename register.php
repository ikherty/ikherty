<?php
//echo 'hi there';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ikherty</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <title>ikherty</title>

</head>

<body>
    <section class="login">
        <div class="container">
            <h1>Добро пожаловать в Propwash Service!</h1>
            <div class="row">
                <div class="col">
                    <h2 class="white">Заполните поля:</h2>
                    <form id="register" action="vendor/signup.php" method="post" enctype="multipart/form-data">
                        <input type="login" name="login" class="form-control" placeholder="Логин...">
                        <input type="email" name="email" class="form-control" placeholder="E-mail...">
                        <input type="password" name="password" class="form-control" id="password_in" placeholder=" Пароль...">
                        <button type="submit" class="btn btn-light">Зарегестрироваться</button>
                        <p>
                            Уже зарегестрирован? - <a href="index.php">Войти</a>
                        </p>
                        <?php
                            if ($_SESSION['message']) { 
                               echo  $_SESSION['message']; 
                            }
                            unset($_SESSION['message']);
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>