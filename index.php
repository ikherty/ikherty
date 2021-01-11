<?php
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
            <h1>Hi! first here?</h1>
            <div class="row">
                <div class="col">
                    <h2 class="white">Log in:</h2>
                    <form id="Log_in" action="vendor/signin.php" method="post">
                        <input type="login" name="login" class="form-control" placeholder="Login...">
                        <input type="password" name="password" class="form-control" placeholder="Password...">
                        <button type="submit" class="btn btn-light">Sign up</button>
                        <p> 
                            Don't have an account yet? - <a href="register.php">Register</a>
                        </p>
                        <p class="error">
                            <?php
                                if ($_SESSION['message']) { 
                                    echo  $_SESSION['message']; 
                                }
                                unset($_SESSION['message']);
                            ?>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>