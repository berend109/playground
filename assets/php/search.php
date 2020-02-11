<?php

$directory = 'C:\\xampp\\htdocs\\workspace\\github\\berend109\\';
$scanned_directory = array_diff(scandir($directory), array('..', '.'));

$file = fopen('customworkspace.txt', 'r');
while(! feof($file))
  	{
  		echo fgets($file). "<br />";
  	}
fclose($file);