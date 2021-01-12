<?php

include('db.php');
global $db;
$searchq = $_GET['name'];
$res = $db->query("SELECT * FROM `news` WHERE `header` LIKE '%$searchq%' OR `descr` LIKE '%$searchq%' OR `text` LIKE '%$searchq%'");
echo "Полученные результаты:";
foreach ($res as $new_post) : ?>
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