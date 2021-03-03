<?php

require_once '../conn.php';

$pdo = new connection;
$con = $pdo->connect();

$scannedDir = array();

function getDirectory($con, $scannedDir) {
	try {
		$userid = $_SESSION['id'];

		$stmt = $con->prepare("SELECT `projectDir` FROM `projects` WHERE `userId` = ?");
		$stmt->execute([$userid]);

		foreach(($stmt->fetchAll()) as $dbDirectory) {
			array_push($scannedDir, $dbDirectory);
		}
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	
	$conn = null;

	return $scannedDir;
}
