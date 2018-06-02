<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 18.06.2017
 * Time: 18:40
 */
include('include/header.php');
?>
<p> Результаты поиска: </p>
<?php

if(isset($_GET['search'])) {
    // соединяемся с сервером базы данных
    $link = mysqli_connect('localhost', 'student', '',"mybase");
    if (mysqli_connect_errno()) {
        printf("Не удалось подключиться: %s\n", mysqli_connect_error());
        exit();
    }
    // подключаемся к базе данных
    mysqli_set_charset($link, "utf8");
    // выбираем все значения из таблицы
    $result = mysqli_query($link,"select $str"); //*or die(mysqli_error($link)/*"Извините, ничего не найдено"*/);
    $i=0;
    while ($data = mysqli_fetch_array($result, MYSQLI_NUM))
    {
        echo '<br>';
        echo '<p>Название</p>:' . '<p>' . $data['1'] . '</p><br>';
        echo '<p>Предмет:</p>' . '<p>' . $data['2'] . '</p><br>';
        echo "<div class=\'spoil\'><input type='checkbox' id='b$i' class='hide'><label for='b$i'>Текст(Нажмите, чтобы раскрыть):</label>" . "<div><p>" .$data['3']. "</p></div></div><br>";
        echo '<br>';
        $i++;
    }
}
?>
<?php
include('include/footer.php');
?>
