<!DOCTYPE html>
<html lang="eng">

<head>

	<title>Playground</title>

	<!-- bootstrap -->
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>

	<?php
	session_start();

	require_once '../db/connection.php';
	$pdo = new connection;
	$con = $pdo->connect();

	$dirToRemove = $_SESSION['dirToRemove'];

	try {
		$sql = "DELETE FROM `projects` WHERE `projectDir` = ('$dirToRemove')";
		$con->exec($sql);
		echo 'Dir ', $dirToRemove, ' successfully deleted';
	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}

	echo '<br>';
	echo '<br>';
	echo ("<button class=\"btn btn-info btn-lg\" onclick=\"location.href='mainScreen.php'\">Back to Home</button>");
	?>

</body>

</html>