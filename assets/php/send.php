<?php

require_once 'conn.php';

$pdo = new connection;
$con = $pdo->connect();

// Prepare the statement already
// We're going to use it later
$stmt = $con->prepare("INSERT INTO `projects`(`projectDir`) VALUES (:input)");


// So .. $_POST can contain anything
$input = $_POST['input'];

// This below is not safe to use for database inputs
// windows setting
$input = addslashes($input);


echo $input;

try {
	// Bind the input to the statement we prepared
	$stmt->bindParam(':input', $input, PDO::PARAM_STR);
	$stmt->execute();

	echo "New record created successfully";
}
catch(PDOException $e) {
	echo "some custom error";
	//echo $sql . "<br>" . $e->getMessage();
}

$con = null;

echo '<br>';
echo '<br>';
echo("<button onclick=\"location.href='../../index.php'\">Back to Home</button>");
