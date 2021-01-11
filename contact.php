<?php require 'template/header.php'; ?>

<section class="contact blue_promo">
    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="white">Let's Talk About You<span id="contact_name"></span> </h1>
            <div class="text white"> If you think we'd be a good fit for your next project or have an idea you'd like to share with us, we'd love to hear <br> all about it.</div>
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
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your message..."></textarea>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    <button type="submit" onclick="validateForm()" class="btn btn-primary white_contact_btn">Submit</button>
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
                <h2>Contact Us</h2>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="contact_item">
                    <div class="contact_item_header">General Enquiries</div>  
                    <a href="hello@daikatana.com">hello@daikatana.com</a>
                </div>
            </div>

            <div class="col">
                <div class="contact_item">
                    <div class="contact_item_header">Work Enquiries</div>  
                    <a href="work@daikatana.com">work@daikatana.com</a>
                </div>
            </div>

            <div class="col">
                <div class="contact_item">
                    <div class="contact_item_header">Career Enquiries</div>  
                    <a href="jobs@daikatana.com">jobs@daikatana.com</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2>Our Location</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="location_item">
                    <div class="location_item_header">Charlottesville</div>  
                    <div class="location_item_ad">Lorem Ipsum 42 Dolor sit Amet N3 Charlottesville, VA 22902</div>
                </div>
            </div>

            <div class="col">
                <div class="location_item">
                    <div class="location_item_header">San Francisco</div>  
                    <div class="location_item_ad">Lorem Ipsum 42 Dolor sit Amet N3 Charlottesville, VA 22902</div>
                </div>
            </div>

            <div class="col">
                <div class="location_item">
                    <div class="location_item_header">Austin</div>  
                    <div class="location_item_ad">Lorem Ipsum 42 Dolor sit Amet N3 Charlottesville, VA 22902</div>
                </div>
            </div>
        </div>
    </div>        
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980880.3263725003!2d-123.47100168450882!3d37.608433086202815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2z0KHQsNC9LdCk0YDQsNC90YbQuNGB0LrQviwg0JrQsNC70LjRhNC-0YDQvdC40Y8sINCh0KjQkA!5e0!3m2!1sru!2sru!4v1602684687106!5m2!1sru!2sru" width="100%"  height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<?php require 'template/footer.php'; ?>
