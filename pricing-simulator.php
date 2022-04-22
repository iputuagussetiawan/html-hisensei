<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing Simulator | Hisensei</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/pages/pricing-simulator.css">
</head>

<body data-bs-spy="scroll" data-bs-target="#nav-custom" data-bs-offset="80">
    <div class="page-wrapper">
        <?php
        include('header-two.php');
        ?>
        <main>
            <?php
            include('partials/section-pricing-simulator.php');
            ?>
        </main>
        <?php
        include('footer.php');
        ?>
    </div>

    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/pages/pricing-simulator.js"></script>
</body>

</html>