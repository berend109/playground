<?php

require_once 'get.php';

$scannedDir = (getDir($con, $scannedDir));

foreach ($scannedDir as $directory) {
	$directory = array_shift($directory);

	$scanned_directory = array_diff(scandir($directory), array('..', '.'));

	echo '<p>'. $directory. '</p>';
	
	foreach ($scanned_directory as $value) {
		if ($value != 'playground') {
			if ($value != '.idea') {
				echo '<form action="../'. $value. '" target="_blank">';
				echo '<button>'. $value. '</button>';
				echo '<br>';
				echo '</form>';
			}
		}
	}
}
