<?php
$ch = curl_init('http://46.61.235.29:40280/daltonik/');

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, '1');
curl_setopt($ch,CURLOPT_COOKIEFILE,"cookie.txt");
$page = curl_exec($ch);
$buff = $page;

for($j=0;$j<150;$j++)
{
    for ($i = 0; $i < 3; $i++) {
        $buff = strstr($buff, "color:");
        $colors[] = substr($buff, 6, 7);
        $buff = strstr($buff, "z-index:");
        $k = strpos($buff, ";");
        $zindexs[] = intval(substr($buff, 8, 3));
    }

    $max = array_keys($zindexs, max($zindexs))[0];
    $succolor = $colors[$max];
    curl_setopt($ch,CURLOPT_COOKIESESSION,false);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "color=".$succolor);
    $page=curl_exec($ch);
    if(strpos($page, "Ты либо")!==false)
    {
        echo $j+1 ." good\n";
        if(strpos($page,"{"))
            echo $page;
    }
    else echo "Обшибочка:\n".$page;
    unset($colors,$zindexs);
    $buff=$page;
}

?>