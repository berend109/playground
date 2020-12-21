<?php

require_once 'get.php';

// first check if dir exist that is stored in the DB.
function checkDir($scannedDir) {
	foreach ($scannedDir as $directory) {
		$directory = array_shift($directory);

		$checkIfDirExist = (is_dir($directory));
		if ($checkIfDirExist == true) {
			displayWorkspace($directory);
		} else {
			// if the dir does not exist on the machine you can remove it.
			echo '<br><br>';
			echo 'Workspace not found ('. $directory. ')';
			$_SESSION['dirToRemove'] = $directory;
			echo '<form action="remove.php">';
			echo '<button class="btn btn-danger btn-lg">Remove Directory</button>';
			echo '</form>';
		}
	}
}

// if the dir exist on your machine it will display each project as a button.
function displayWorkspace($directory) {
	// also gets rids of . and .. in unix.
	$scanned_directory = array_diff(scandir($directory), array('..', '.'));

	echo '<p>'. $directory. '</p>';

	foreach ($scanned_directory as $value) {
		if ($value != 'playground' && $value != 'index.html' && $value != 'index.php') {
			echo '<form action="../../../../'. $value. '" target="_blank">';
			echo '<button class="btn btn-info btn-lg">'. $value. '</button>';
			echo '<br>';
			echo '</form>';
		}
	}

	echo '<br>';
	$_SESSION['dirToRemove'] = $directory;
	echo '<form action="remove.php">';
	echo '<button class="btn btn-danger btn-lg">Remove Directory</button>';
	echo '</form>';
}

$scannedDir = getDirectory($con, $scannedDir);
checkDir($scannedDir);