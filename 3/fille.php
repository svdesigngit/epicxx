<?php

$content = file_get_contents("vesna.txt");
$content = explode("\r\n\r\n",$content);
shuffle($content);
var_dump($content);

file_put_contents("vesna.txt",implode("\r\n\r\n",$content));