<?php

session_start();

require_once 'get.php';

// first check if dir even exist that is stored in the DB.
function checkDir($scannedDir) {
	foreach ($scannedDir as $directory) {
		$directory = array_shift($directory);

		$checkIfDirExist = (is_dir($directory));
		if ($checkIfDirExist == true) {
			countProjects($directory);
		} else {
			echo '<br><br>';
			echo 'Workspace not found ('. $directory. ')';
			$_SESSION['dirToRemove'] = $directory;
			echo '<form action="assets/php/remove.php">';
			echo '<button>Remove Directory</button>';
			echo '</form>';
		}
	}
}

// count the amount of folders that exists in the directory.
function countProjects($directory) {
	$files1 = glob($directory ."*");
	$filecount = count($files1);

	// TODO create this if else in such a way that it doesn't need playground in the number
	// 		now you have to have the number at 1 becuase of the playground folder.
	// 		but that defeats the purpose of this app as you can add custom directory's.
	if ($filecount <= 1) {
		echo '<p>'. $directory. '</p>';
		echo '<br>';
		echo 'No projects yet !!';
	} else {
		displayWorkspace($directory);
	}
}

// if the dir exist it will display each project as a button.
function displayWorkspace($directory) {
	// also gets rids of . and .. in unix.
	$scanned_directory = array_diff(scandir($directory), array('..', '.'));

	echo '<p>'. $directory. '</p>';

	foreach ($scanned_directory as $value) {
		if ($value != 'playground') {
			echo '<form action="../'. $value. '" target="_blank">';
			echo '<button>'. $value. '</button>';
			echo '<br>';
			echo '</form>';
		}
	}
}
