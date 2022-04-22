<?php
$config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$config['base_url'] .= "://" . $_SERVER['HTTP_HOST'];
$config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
?>
<header>
    <nav class="navbar-custom navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <div class="navbar-brand__logo-container">
                    <img src="images/logo/logo.svg" alt="logo">
                </div>
            </a>
            <?php
            $showBackHome = '';
            $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
            switch ($uriSegments[2]) {
                case "thankyou.php":
                    $showBackHome = '';
                    break;
                default:
                    include 'partials/buttonBackHome.php';
            }
            ?>
        </div>
    </nav>
</header>