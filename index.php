<?php

session_start();


?>
<!DOCTYPE html>

<html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>dangarum (BS 4)</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Payment-Form.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/footer-ultimate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">

<body>
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: #6891a2;">
        <div class="container">
          
            <div><a class="navbar-brand" href="#" style="background-color: #ffffff;"><i class="fa fa-usd"></i>DAN-GARUM</a>
                <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="login.php" style="font-size: 19px;color: #ffffff;">login </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="register.php" style="font-size: 19px;color: #ffffff;">Register </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="font-size: 19px;color: #ffffff;">WELCOME <?php echo $_SESSION['name']; ?>!</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="jumbotron hero" style="background-image: url(&quot;assets/img/315444-photography-children-happy-748x499.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-md-4 phone-preview">
                    <div class="iphone-mockup"></div>
                </div>
                <div class="col-7 col-md-6 text-left order-9 get-it">
                    <h1 data-bs-parallax-bg="true" style="width: 433px;">LET'S DONATE!</h1>
                    <p style="width: 417px;height: 57px;margin: 33px;padding: -21px;color: rgb(231,248,247);font-size: 22px;"> Join us now to bring a change and to make this world a better place</p>
                    <p><a class="btn btn-primary btn-lg" role="button" href="story.php" style="background-color: #6891a2;">JOIN US</a>
                        <a class="btn btn-success btn-lg" role="button" href="untitled-1.php">DONATE NOW</a></p>
                </div>

            </div>
        </div>
    </div>
    <section class="testimonials">
        <h2 class="text-center"></h2>
        <blockquote class="blockquote">
            <p>HEAL THE WORLD WE LIVE IN,SAVE IT FOR OUR CHILDREN</p>
            <footer class="blockquote-footer">MICHAEL JACKSON</footer>
            <a button type="button" class="btn btn-info"  role="button" href="story.php">OUR STORIES</a>
        </blockquote>
    </section>
    <div class="footer-clean" style="color: #444444;background-color: #6891a2;">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 item social" style="background-color: #aaaaaa;">
                        <p class="text-center footer-logo-text">
                        We are a charity company which provides various donations to the peoples who are in need.Our major focus is on homeless peoples and childrens.</p>
                    </div>
                    <div class="col-sm-4 col-md-3 item-srv" style="background-color: #aaaaaa;">
                        <h3>ABOUT US</h3>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="https://ultimatecomputers.ro/shop/index.php?route=account/voucher"></a></li>
                            <li><a href="faq.php">FAQs</a></li>
                            <li><a href="gallery.php">OUR GALLERY</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item-srv" style="background-color: #aaaaaa;">
                        <h3>INFORMATION</h3>
                        <ul>
                            <li><a href="story.php">Privacy Poilicy</a></li>
                            <li><a href="team.php">Team</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item" style="background-color: #aaaaaa;">
                        <h3>CONTACT US</h3>
                        <ul>
                            <li class="despre-noi"><i class="fa fa-home despre-noi"></i>&nbsp;<a href="https://goo.gl/maps/yf1Kzg881gRCzDG96">Kamalpokhari-5,kathmandu,Nepal</a></li>

                            <li class="despre-noi"><i class="fa fa-envelope despre-noi"></i>&nbsp;
<a href="mailto:dangarum@gmail.com">Email US</a></li>

                            <li class="despre-noi"><i class="fa fa-phone despre-noi"></i>&nbsp;<a href="tel:123-456-7890">123-456-7890</a></li>
                        </ul>
                        <ul></ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="simple-slider">
        <div class="swiper-container" style="width: 800px;">
            <div class="swiper-wrapper"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="media">
        <div></div>
        <div class="media-body"></div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>