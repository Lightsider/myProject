<?php
/**
 * Created by PhpStorm.
 * User: Obi-Wan
 * Date: 13.12.2018
 * Time: 17:56
 */
$included=true;
$default_page = "main.php";

$action=$_GET['action']?$_GET['action']:$default_page;

if(file_exists($action))
{
    include_once $action;
}
else
{
    include_once $default_page;
}

die();