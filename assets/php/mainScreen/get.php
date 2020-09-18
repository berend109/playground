<?php

require_once '../conn.php';

$pdo = new connection;
$con = $pdo->connect();

$scannedDir = array();

function getDir($con, $scannedDir) {
	try {
		$stmt = $con->prepare("SELECT `projectDir` FROM `projects` WHERE 1");
		$stmt->execute();

		foreach(($stmt->fetchAll()) as $dbDirectory) {
			array_push($scannedDir, $dbDirectory);
		}
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	
	$conn = null;

	return $scannedDir;
}
