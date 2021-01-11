<?php require 'vendor/db.php'; ?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

        <title>DaiKatana</title>

    </head>

    <body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="daikatana.php">Dai<span>Katana</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="account.php">Account</a>
                <a class="nav-link" href="blog.php">News</a>   
                <a class="nav-link" href="vendor/logout.php">Exit</a>        
            </div>
        </div>
        <a class="btn btn-primary blue_contact_btn" href="contact.php" role="button">Contact Us</a>
        </nav>
    </header>