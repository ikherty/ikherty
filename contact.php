<?php require 'template/header.php'; ?>

<section class="contact blue_promo">
    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="white">Желаете заказать собственную сборку? Напишите нам!<span id="contact_name"></span> </h1>
            <div class="text white"> Укажите все пожелания, что вы ожидаете от сборки, какие бюджет и сроки.</div>
            </div>
        </div>
    </div>
</section>

<section class="form">
    <div class="container">
        <div class="row">
            <div class="col">
            <form name="myForm">
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Сообщение..."></textarea>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    <button type="submit" onclick="validateForm()" class="btn btn-primary white_contact_btn">Отправить</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</section>

<section class="contact_location">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Контакты для связи</h2>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="contact_item">
                    <div class="contact_item_header">Валентина</div>  
                    <a href="https://www.instagram.com/ikhertu">ikhertu</a>
                </div>
            </div>

            <div class="col">
                <div class="contact_item">
                    <div class="contact_item_header">Михаил</div>  
                    <a href="https://www.instagram.com/mikenomatter/">mikenomatter</a>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col">
                <h2>Местоположение мастерской</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="location_item">
                    <div class="location_item_header">Обнинск</div>  
                    <div class="location_item_ad">Калужская область</div>
                </div>
            </div>
        </div>
    </div>        
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36520.963498343815!2d36.572663677489!3d55.10346452840009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46cad2c07e11c8f7%3A0x5fe3310da6ab08ad!2z0J7QsdC90LjQvdGB0LosINCa0LDQu9GD0LbRgdC60LDRjyDQvtCx0Lsu!5e0!3m2!1sru!2sru!4v1608017548763!5m2!1sru!2sru" width="100%"  height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<?php require 'template/footer.php'; ?>
