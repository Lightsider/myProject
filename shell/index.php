<?php
    session_start();
    $this_page="index.php";
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
    echo $head.$cont;
?>

<?php
$dir1='C:/xampp/htdocs/myprogect/ctf/shell/images/users';
$dir2='C:/xampp/htdocs/myprogect/ctf/shell/include';
$arimg=scandir($dir1,1);
$artxt=scandir($dir2,1);

    foreach($arimg as $key=>$value)
    {
        if(file_exists($dir1.'/'.$key.'.png'))
        {
            $buf=file_get_contents($dir2.'/'.$key.'.txt');
            preg_match_all("[\(name:([^;]+)\;]", $buf, $tit);
            preg_match_all("[\;message:([^\)]+)\)]", $buf, $mess);
            echo "<div class=\"four columns  alpha\"><div class=\"bg_Homes\"><div class=\"img_homes_st\"><img src=\"images/users/$key.png\" class=\"\" alt=\"\"></div><div class=\"text_homes_style\"><p class=\"calc_homes_st editContent\" style=\"color: rgb(204, 0, 0); font-size: 18px; background-color: rgba(0, 0, 0, 0); font-family: &quot;Open Sans&quot;, sans-serif;\" src=\"images/5_hotel/image-1.png\"> {$tit[1][0]} </p><p class=\"calc_homes_text editContent\" style=\"color: rgb(61, 133, 198); font-size: 14px; background-color: rgba(0, 0, 0, 0); font-family: &quot;Open Sans&quot;, sans-serif;\" src=\"images/5_hotel/image-1.png\"> {$mess[1][0]} </p></div></div></div>";
        }
    }
?>
            </div>
        </div>
    </div>
</div>

<?php
echo $foot;
?>




