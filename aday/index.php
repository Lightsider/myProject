<?php
$flag = "flag{do_or_do_not_there_is_not_try}";
$show_flag = isset($_POST['text'])?true:false;
$show_help = isset($_GET['show_help']) ? $_GET['show_help'] : "N";
$text = isset($_GET['text']) ? $_GET['text'] : "";
$message = "";


if (strtolower($show_help) === "yes") {
    $message = "Use POST , young jedi!";
}
if ($show_flag != true && $text !== "") {
    $message .= htmlspecialchars($text) . ". <br> Нит так я ни ододу";
}

if ($show_flag === true) {
    $message = "Молодесь, держи флаг)0) " . $flag;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Форма получения флага</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">
    <div class="info">
        <h1>Форма получения флага</h1><span>Made with <i class="fa fa-heart"></i> by Obi-Wan Kenobi</span>
    </div>

</div>
<div class="form">
    <div class="thumbnail">
        <?php if ($show_flag === true): ?>
            <img src="img/3.PNG"/>
        <?php elseif ($text == ""): ?>
            <img src="img/2.jpg"/>
        <?php else: ?>
            <img src="img/1.PNG"/>
        <?php endif; ?>
    </div>
    <form class="login-form">
        <input hidden name="show_help" value="no">
        <input name="text" type="text" placeholder="Проси адать флаг"/>
        <button type="submit">Попрасить</button>

        <?php if ($message): ?>
            <p class="message"> <?= $message ?></p>
        <?php endif; ?>
    </form>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


<script src="js/index.js"></script>


</body>

</html>
