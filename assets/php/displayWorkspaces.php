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

	// keep the number at 1 for playground. not needed for other workspaces
	// this may need improvement if this brings problems.
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
	// scan for projects in the dir.
	// also gets rids of . and .. in unix.
	$scanned_directory = array_diff(scandir($directory), array('..', '.'));

	// displays the name of the folder where the project nest in.
	echo '<p>'. $directory. '</p>';

	// displays each project as a button to the screen.
	foreach ($scanned_directory as $value) {
		if ($value != 'playground') {
			echo '<form action="../'. $value. '" target="_blank">';
			echo '<button>'. $value. '</button>';
			echo '<br>';
			echo '</form>';
		}
	}
}
