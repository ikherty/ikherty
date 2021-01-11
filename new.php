<?php require 'template/header.php'; ?>

<?php $new_post = get_new_by_id($_GET['id']); ?>

<section class="white_promo new_post">
  <div class="container">
    <div class="row">
      <div class="col">
        <img class="w-100" src="<?php echo $new_post["photo"]; ?>">
      </div>
      <div class="col">
        <h1 class="blue"><?php echo $new_post["header"]; ?></h1>
        <br>
        <h2><?php echo $new_post["descr"]; ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <br><br>
        <p><?php echo $new_post["text"]; ?></p>
      </div>
    </div>
  </div>
</section>

<?php require 'template/conv-light.php'; ?>

<?php require 'template/footer.php'; ?>
