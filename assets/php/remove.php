<?php

session_start();

require_once 'conn.php';
$pdo = new connection;
$con = $pdo->connect();

$dirToRemove = $_SESSION['dirToRemove'];

try {
	$sql = "DELETE FROM `projects` WHERE `projectDir` = ('$dirToRemove')"; 
	$con->exec($sql);
	echo 'Dir successfully deleted';
} catch (PDOException $e) {
	echo $sql . "<br>". $e->getMessage();
}

echo '<br>';
echo '<br>';
echo("<button onclick=\"location.href='../../index.php'\">Back to Home</button>");
