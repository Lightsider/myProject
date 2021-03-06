<?php
/**
 * Created by PhpStorm.
 * User: Obi-Wan
 * Date: 13.12.2018
 * Time: 17:59
 */

if (!isset($included) || $included !== true) die();
?>

<!DOCTYPE HTML>

<html>
<head>
    <title>Блог леса</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ie8.css"/><![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ie9.css"/><![endif]-->
</head>
<body>
<div id="page-wrapper">

    <!-- Header -->
    <div id="header">

        <!-- Logo -->
        <h1><a href="index.html" id="logo">Блог леса <em>by Obi-Wan</em></a></h1>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li  class="current"><a href="index.php">Главная</a></li>
                <li><a href="index.php?action=stone.php">Блог Камня</a></li>
                <li><a href="index.php?action=stump.php">Блог Пня</a></li>
                <li><a href="index.php?action=oak.php">Блог Старого Дуба</a></li>
            </ul>
        </nav>

    </div>

    <!-- Banner -->
    <section id="banner">
        <header>
            <h2><em>Будьте первыми, кто прочитает последние новости нашего леса</em></h2>
        </header>
    </section>

    <!-- Highlights -->
    <section class="wrapper style1">
        <div class="container">
            <div class="row 200%">
                <section class="4u 12u(narrower)">
                    <div class="box highlight">
                        <img class="icon major" src="images/stone.jpg">
                        <a href="index.php?action=stone.php">
                            <h3>Блог Камня</h3>
                        </a>
                        <p>Увлекательные истории от мистера Камня</p>
                    </div>
                </section>
                <section class="4u 12u(narrower)">
                    <div class="box highlight">
                        <img class="icon major" src="images/pen.jpeg">
                        <a href="index.php?action=stump.php">
                            <h3>Блог Пня</h3>
                        </a>
                        <p>Увлекательные истории от мистера Пня</p>
                    </div>
                </section>
                <section class="4u 12u(narrower)">
                    <div class="box highlight">
                        <img class="icon major" src="images/dub.jpg">
                        <a href="index.php?action=oak.php">
                            <h3>Блог Старого Дуба</h3>
                        </a>
                        <p>Увлекательные истории от мистера Старого Дуба</p>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!-- Copyright -->
    <div class="copyright">
        <ul class="menu">
            <li>&copy; SharLike 2018. All lefts reserved</li>
            <li>by Obi-Wan Kenobi</li>
        </ul>
    </div>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]>
<script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>
