<!DOCTYPE html>
<html lang="eng">
<head>

	<title>Playground</title>

	<!-- bootstrap -->
	<!-- CSS only -->
	<link rel="stylesheet"
		  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		  integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
		  crossorigin="anonymous">

</head>
<body>

<?php

require_once '../conn.php';

$pdo = new connection;
$con = $pdo->connect();

$stmt = $con->prepare("INSERT INTO `projects`(`projectDir`) VALUES (:input)");

// display the filepath that will be added.
echo $_POST['input'];
echo '<br>';
echo '<br>';

try {
	echo "New record created successfully";

	// Bind the input to the statement we prepared
	$stmt->bindParam(':input', $_REQUEST['input'], PDO::PARAM_STR);
	$stmt->execute();
} catch(PDOException $e) {
	echo '<br>';
	echo '<br>';
	echo $e->getMessage();
}

$con = null;

echo '<br>';
echo '<br>';
echo("<button class=\"btn btn-info btn-lg\" onclick=\"location.href='mainScreen.php'\">Back to Home</button>");

?>

</body>
</html>