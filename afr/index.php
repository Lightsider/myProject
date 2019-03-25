<?php
/**
 * Created by PhpStorm.
 * User: Obi-Wan
 * Date: 13.12.2018
 * Time: 17:56
 */
$included=true;
$default_page = "main.html";

$action=isset($_GET['action'])?$_GET['action']:$default_page;

if(file_exists($action))
{

    echo file_get_contents( $action);
}
else
{
    echo file_get_contents( $default_page);
}

die();