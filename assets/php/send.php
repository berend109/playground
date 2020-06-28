<?php

require_once 'conn.php';

$pdo = new connection;
$con = $pdo->connect();

$stmt = $con->prepare("INSERT INTO `projects`(`projectDir`) VALUES (:input)");

// display the filepath that will be added.
echo $_POST['input'];
echo '<br>';
echo '<br>';

try {
	// Bind the input to the statement we prepared
	$stmt->bindParam(':input', $_REQUEST['input'], PDO::PARAM_STR);
	$stmt->execute();

	echo "New record created successfully";
} catch(PDOException $e) {
	// TODO: create better custom error
	echo '<br>';
	echo '<br>';
	echo $e->getMessage();
}

$con = null;

echo '<br>';
echo '<br>';
echo("<button onclick=\"location.href='mainScreen.php'\">Back to Home</button>");
