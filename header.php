<?php
$config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$config['base_url'] .= "://" . $_SERVER['HTTP_HOST'];
$config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
?>

<header>
    <nav class="navbar-custom navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <div class="navbar-brand__logo-container">
                    <img src="images/logo/logo.svg" alt="logo" class="">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="burger-wrapper">
                    <span id="hamburger" class="burger">
                        <svg width="45" height="45" viewBox="0 0 100 100">
                            <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                            <path class="line line2" d="M 20,50 H 80" />
                            <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                        </svg>
                    </span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="nav-custom" class="navbar-nav ms-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#why-us">Why us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#exp">Experiences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#how-it-work">How it works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#pricing">Pricing</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#faq">F.A.Q</a>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="images/lang/lang-indonesia.png" alt="lang indo">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lang text-center" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"> <img src="images/lang/lang-indonesia.png" alt="lang english"></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"> <img src="images/lang/lang-english.png" alt="lang english"></a></li>
                        </ul>
                    </li>
                    <li class="nav-item d-block d-lg-none">
                        <div class="nav-link">
                            <a href="#" class="nav-lang"><img src="images/lang/lang-ID.svg" alt="lang ind"></a>
                            <a href="#" class="nav-lang"><img src="images/lang/lang-UK.svg" alt="lang eng"></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link">
                            <a class=" btn btn-primary navbar-custom-button" href="<?php echo $config['base_url']; ?>booking.php"><span>Book FREE Trial</span></a>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                        <div class="nav-link ms-0 ms-md-2">
                            <a class=" btn btn-primary navbar-custom-button" href="#"><span><i class="fas fa-lock"></i> Login</span></a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
</header>