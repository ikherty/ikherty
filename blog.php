<?php require 'template/header.php'; ?>

<section class="white_promo">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="blue">Лента новостей</h1>
        <div class="text"> Здесь размещены все новости о проектах и их реализациях. Приятного изучения!</div>
      </div>
    </div>
  </div>
</section>
<section class="search">
  <div class="container">
    <nav class="navbar navbar-light">
      <form class="form-inline" name="search" method="get" action="search.php">
        <input class="form-control mr-sm-2" name="search_text" type="search" placeholder="Введите слово.." aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Поиск</button>
      </form>
    </nav>
  </div>
</section>
<?php require 'template/blog-list.php'; ?>
  
<?php require 'template/footer.php'; ?>