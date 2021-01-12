<?php   
    session_start();
    require 'template/header.php';
?>
        <section class="account">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="blue">Добро пожаловать, <?php echo $_SESSION['user']['login']  ?>!</h1>
                    </div>
                </div>
            </div>
            </section>

            <section class="new_post">
            <div class="container">
                <div class="row">
                <div class="col">
                <form id="Log_in" action="vendor/share_new.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3" placeholder="Что нового?"></textarea>
                        <input type="file" name="photo" class="add_file form-control-file" id="exampleFormControlFile1">
                        <button type="submit" class="btn btn-primary blue_contact_btn">Поделиться</button>
                    </div>
                    </form>
                    <p >
                        <?php
                            if ($_SESSION['message']) { 
                                echo  $_SESSION['message']; 
                            }
                            unset($_SESSION['message']);
                        ?>
                    </p>
                </div>
                </div>
            </div>
        </section>

<?php   $user_posts = get_user_posts($_SESSION['user']['id'] ); 

        foreach ($user_posts as $user_post) : ?>

        <section class="show_post">
            <div class="container">
                <div class="post_item">
                    <div class="row">
                        <div class="col">
                            <p><?php echo $user_post["text"]; ?></p>
                            <br>
                            <img src="<?php echo $user_post["photo"]; ?>" width="500">
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php endforeach; ?>

<?php require 'template/footer.php'; ?>

