<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Сопротивление</title>
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/theme.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700,100' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,700,900,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.7/typicons.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/pushy.css">
    <link rel="stylesheet" href="../assets/css/masonry.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/odometer-theme-default.css">
    <script>
        window.odometerOptions = {
            selector: '.odometer',
            format: '(,ddd)', // Change how digit groups are formatted, and how many digits are shown after the decimal point
            duration: 13000, // Change how long the javascript expects the CSS animation to take
            theme: 'default'
        };
    </script>
</head>
<body class="">
<?php
if(isset($_POST['login']) && isset($_POST['password']))
{
    if($_POST['login']==="compadmin" && $_POST['password']==="smartsuperadmin") // Да да, именно так топорно :)
    {?>
        <div class="container">
            <h1>Привет, админ!</h1>
            <p> Твой флаг: school{i_am_hater_and_i_know_it}</p>
            <p> А сама админка будет позже, наверное...</p>
        </div>
    <?php
    }
    else
    {?>
        <form method="post" id="login-form">
            <h4>Вход в панель администратора</h4>
            <input type="text" name="login" placeholder="login"><br>
            <input type="password" name="password" placeholder="password"><br>
            <input type="submit" value="Войти">
            <p style="color:red"> Неверный логин или пароль </p>
        </form>
    <?php
    }
}
else
{?>

<form method="post" id="login-form">
    <h4>Вход в панель администратора</h4>
    <input type="text" name="login" placeholder="login"><br>
    <input type="password" name="password" placeholder="password"><br>
    <input type="submit" value="Войти">
</form>
<?php
}?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/js/bootstrap-scrollspy.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="http://masonry.desandro.com/masonry.pkgd.js"></script>
<script src="../assets/js/masonry.js"></script>
<script src="../assets/js/pushy.min.js"></script>
<script src="../assets/js/jquery.magnific-popup.min.js"></script>
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/scripts.js"></script>
<script src="../assets/js/odometer.js"></script>
</body>
</html>
