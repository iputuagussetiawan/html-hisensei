<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Hisensei </title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/pages/thankyou.css">
</head>

<body>
    <div class="page-warpper">
        <?php
        include('header-simple.php');
        ?>
        <main>
            <section class="thank-you section-padding--top">
                <div class="container">
                    <h1 class="sr-only">Special Thank From Hisensei</h1>
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 text-center">
                            <div class="card-thankyou">
                                <div class="card-thankyou__image-container floating-lg">
                                    <img src="images/pages/thankyou/thankimage.svg" alt="thank you image">
                                </div>
                                <div class="card-thankyou__image-shadow-container">
                                    <img src="images/pages/thankyou/thankimage-shadow.svg" alt="thank you image">
                                </div>
                                <h2 class="card-thankyou__title">Registration success!</h2>
                                <div class="card-thankyou__info">
                                    <p>We’ve received your request for FREE Trial Class.
                                        Our admin will contact you shortly.</p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="<?php echo $config['base_url']; ?>" class="btn btn-primary"><span>Back To Home</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php
        include('footer-simple.php');
        ?>
    </div>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/pages/thankyou.js"></script>
</body>

</html>