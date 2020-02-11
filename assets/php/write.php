<?php

session_start();

$filename = '../../customworkspace.txt';

$content = $_GET["customWorkspace"];

file_put_contents($filename, $content, FILE_APPEND | LOCK_EX);

echo 'succes';

header("Refresh:3; url=../../index.php");