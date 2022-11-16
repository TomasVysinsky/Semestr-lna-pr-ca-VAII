<?php
/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/Styles.css">
    <link rel="stylesheet" href="public/css/styl.css">
    <script src="public/js/script.js"></script>
    <script src="public/js/cookie.js" type="application/javascript"></script>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg bg-warning">
    <div class="container-fluid">
        <a class="branding" href="?c=home"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?c=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link" href="?c=brands">Brands</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <?php if ($auth->isLogged()) { ?>
                        <a class="nav-link" href="?c=auth&a=logout">Logout</a>
                    <?php } else { ?>
                        <a class="nav-link link" href="<?= \App\Config\Configuration::LOGIN_URL ?>">Login</a>
                    <?php } ?>
                </li>
                <li class="nav-item">
                    <?php if ($auth->isLogged()) { ?>
                        <a class="nav-link link" href="#"><?php echo $auth->getLoggedUserName() ?></a>
                    <?php } else { ?>
                        <a class="nav-link link" href="<?= \App\Config\Configuration::LOGIN_URL ?>">Register</a>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </div>
</nav>




<div class="balance-background">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
    <div class="menu-node end-node balance-background">
        <p class="text-center text-wrap fs-6 ec">Site design by Tomáš Vyšinský <br/> 2022 <br/> Created as a school project</p>
    </div>
</div>

<!--Cookies okienko-->
<div class="cookie-disclaimer">
    <div class="cookie-close accept-cookie"><i class="fa fa-times"></i></div>
    <div class="container">
        <p>JDM lovers uses cookies to increase the quality of the website. <a href="#">Read more about which cookies we use</a>.
            <br>By continuing to use the website, you accept our use of cookies</p>
        <button type="button" class="btn btn-success accept-cookie">I accept!</button>
    </div>
</div>
</body>
</html>
