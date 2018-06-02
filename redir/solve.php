<?php
$url = "http://46.61.193.43:40280/head_die/flag.php";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
$result=curl_exec ($ch);
