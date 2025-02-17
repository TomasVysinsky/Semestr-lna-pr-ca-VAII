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
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg bg-warning">
    <div class="container-fluid">
        <a class="branding" href="?c=adminaccount"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link link" href="?c=adminaccount">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link" href="?c=adminaccount&a=brands">Brands</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link" href="?c=adminaccount&a=aboutus">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?c=auth&a=logout">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link" href="?c=adminaccount&a=adminmanagement"><?php echo $auth->getLoggedUserName() ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>




<div class="balance-background floating-navbar-offset">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>

</body>
<script src="public/js/passwordRating.js" type="application/javascript"></script>
</html>
