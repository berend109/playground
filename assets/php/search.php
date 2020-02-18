<?php

// this is for windows
// TODO when the system is not windows throw back to linux file tree.
$directory = 'C:\\xampp\\htdocs\\workspace\\github\\berend109\\';

if(is_dir($directory == true)) {
	echo 'test';
	$scanned_directory = array_diff(scandir($directory), array('..', '.'));
} else {
	$directory = '/opt/lampp/htdocs/workspace/github/berend109/';
	$scanned_directory = array_diff(scandir($directory), array('..', '.'));
	echo 'test1';
}
