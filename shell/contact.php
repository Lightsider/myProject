<?php
session_start();
$this_page="contact.php";
$link = mysqli_connect('localhost', "myuser","","mybase");
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}
// подключаемся к базе данных
mysqli_set_charset($link, "utf8");
// выбираем все значения из таблицы
$result = mysqli_query($link,"select content from pages where id='1' or name='$this_page' or id='2'"); //*or die(mysqli_error($link)/*"Извините, ничего не найдено"*/);
$i=0;
while ($data = mysqli_fetch_array($result, MYSQLI_NUM))
{
    switch($i)
    {
        case 0:
            $head = $data[0];
            break;
        case 1:
            $foot=$data[0];
            break;
        case 2:
            $cont=$data[0];
            break;
    }
    $i++;
}
echo $head.$cont.$foot;
?>