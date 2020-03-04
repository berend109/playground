<?php

require_once 'get.php';

$scannedDir = (getDir($con, $scannedDir));
print_r($scannedDir);

// this is for windows
$directory = 'C:\\xampp\\htdocs\\workspace\\github\\berend109\\';

if(is_dir($directory == true)) {
	$scanned_directory = array_diff(scandir($directory), array('..', '.'));
} else {
	$directory = '/opt/lampp/htdocs/workspace/github/berend109/';
	$scanned_directory = array_diff(scandir($directory), array('..', '.'));
}
