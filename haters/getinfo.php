<?php
if(isset($_GET['width']))
{
    $width = (int)$_GET['width'];

    if($width < 650)
    {
        echo file_get_contents("smart.html");
    }
    else
    {
        echo file_get_contents("comp.html");
    }
}
else
    echo "Что-то пошло не так. Отчет об этом занесен в панель администратора";