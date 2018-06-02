<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 15.06.2017
 * Time: 22:01
 */
$db_host = 'localhost';
$db_name = 'mybase';
$db_username = 'student';
$db_table_to_show = 'lessons';

if(isset($_GET['search']) && isset($_COOKIE['num']) && $_COOKIE['num']=='1')
{
    setcookie('num','2');
}
else setcookie('num','1');

if(isset($_GET['search']) && $_COOKIE['num']!='2')
{
    $sea = $_GET['search'];
    $cook = strrev(base64_encode(strrev("* from $db_table_to_show where title like '%$sea%'")));
    setcookie("cookie", $cook);
    if (preg_match("[\,|\.|\\|\||\/|\'|\"|\(|\)]", $sea)) {
        setcookie('num','1');
        die("Замечена попытка подмены данных");
    }
    header("Location: http://localhost/myprogect/ctf/icook/search.php?search=$sea");
    exit;
}
elseif(isset($_COOKIE['num']) && $_COOKIE['num']=='2' && isset($_COOKIE['cookie']))
{
    $str = strrev(base64_decode(strrev($_COOKIE['cookie'])));
}
?>

<html>
    <title>
        Превосходный учебный поисковик
    </title>
    <head>
        <link rel="stylesheet" href="style.css"
    </head>
    <body>
        <div class="body">
            <div class="head">
                <div class="toppanel">
                    <a href="index.php"><div class="logo">

                        </div></a>
                    <div class="tit">
                        Прекрасный учебный сервис
                    </div>
                    <div class="login">
                        <form method="get">
                            <p> Если Вы админ, то введите логин/пароль</p>
                            <br>
                            <p> Логин: </p>
                            <input type="text" name="login">
                            <p> Пароль: </p>
                            <input type="password" name="pass">
                            <input name="param" hidden type="text" value="0J7QsdC4LdCS0LDQvSDQmtC10L3QvtCx0Lg=">
                            <input type="submit" value="Войти">
                            <p>
                                <?php
                                    if(isset($_GET['param']))
                                    {
                                        if ((isset($_GET['login']) && isset($_GET['pass'])) && $_GET['param'] == "0J7QsdC4LdCS0LDQvSDQmtC10L3QvtCx0Lg=") {
                                            echo "Неверный логин или пароль, проверьте данные";
                                        } elseif ($_GET['param'] != "0J7QsdC4LdCS0LDQvSDQmtC10L3QvtCx0Lg=") {
                                            echo "Замечена попытка подмены данных, ip нарушителя сохранен";
                                        }
                                    }
                                ?>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="title">
                    Доброго времен суток, гость! Это ресурс, на котором собраны все работы студентов по различным предметам.<br>
                    Сделан исключительно в ознакомительных целях, любое копирование наказуемо.
                </div>
                <div class="search">
                    <form action="search.php" method="get">
                        <p><b> Введите название работы для поиска: </b></p>
                        <input type="text" name="search" placeholder="Поиск">
                        <input type="submit" value="Найти">
                    </form>
                </div>
            </div>
            <div class="content">
                <div class="leftblock">
                    <a href=""><img src="include/2.jpg"></a>
                    <a href=""><img src="include/4.jpg"></a>
                </div>
                <div class="centerblock">