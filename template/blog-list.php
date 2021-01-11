<section class="blog_list">

    <?php 
        $news_post = get_news();

        foreach ($news_post as $new_post) : ?>

        <div class="container">
            <div class="blog_item"> 
                <div class="row">
                    <div class="col-4">
                        <a href="new.php?id=<?php echo $new_post["id"]; ?>"> 
                            <img class="w-100" src="<?php echo $new_post["photo"]; ?>">
                        </a>                       
                    </div>
                    <div class="col-8">
                        <a href="new.php?id=<?php echo $new_post["id"]; ?>"><h2><?php echo $new_post["header"]; ?></h2></a>
                        <br>
                        <p><?php echo $new_post["descr"]; ?></p>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</section>