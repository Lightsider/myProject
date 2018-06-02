<?php
session_start();
echo "Это тестовая страница. Сюда подключены все имеющиеся страницы. Что с этим делать вы знаете";
readfile('index.php');
readfile('upload.php');
readfile('contact.php');
readfile('flag.php');
?>
