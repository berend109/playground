<?php

session_start();

require_once 'conn.php';
$pdo = new connection;
$con = $pdo->connect();

$dirToRemove = $_SESSION['dirToRemove'];

echo $dirToRemove;
echo "<br>";
echo "<br>";
echo "<br>";
echo $dirToRemove = addslashes($dirToRemove);
echo "<br>";
echo "<br>";
echo "<br>";

try {
	$sql = "DELETE FROM `projects` WHERE `projectDir` = ('$dirToRemove')"; 
	$con->exec($sql);
	echo 'Dir successfully deleted';
} catch(PDOException $e) {
	echo $sql . "<br>". $e->getMessage();
}

echo '<br>';
echo '<br>';
echo("<button onclick=\"location.href='../../index.php'\">Back to Home</button>");
