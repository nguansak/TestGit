<?php

$max_file = 15;


//$id = $_GET['id'];

$list = glob('*.txt');
$list = array_reverse($list);



$txt = "";
for ($i=0;$i<sizeof($list);$i++)
{
   $fname = substr($list[$i], 0, strpos($list[$i], '.'));
   $txt .= $fname . ':' . file_get_contents($list[$i]) . "\r\n";
}


echo $txt;
