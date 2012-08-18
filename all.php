<?php

$main_ext = "gif";

$base_path = 'c:\\SignatureData\\All\\';
$list = glob($base_path . "*.{$main_ext}");

$base_path_len = strlen($base_path);
for ($i=0;$i<sizeof($list);$i++)
{
	$filename = substr($list[$i], $base_path_len);
	echo $filename . "\r\n";
}