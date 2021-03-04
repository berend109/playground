<?php

if (!isset($_SESSION)) {
	session_start();
}

require_once('../db/connection.php');

$pdo = new connection;
$con = $pdo->connect();
$name = $_POST['name'];
$password = $_POST['pswd'];
$password = password_hash($password, PASSWORD_DEFAULT);

class register
{
	public function __construct()
	{
	}

	public function register($con, $name, $pswd)
	{
		try {
			$stmt = $con->prepare("SELECT * FROM `users` WHERE name = ?");
			$stmt->execute([$name]);
			$user = $stmt->fetch();

			if ($user) {
				$_SESSION['name'] = $_POST['name'];
				echo "Username or password already exists";
				echo "<br><br>";
				echo "<button onclick=\"window.location.href='http://localhost/';\">Go back</button>";
			} else {
				$stmt = $con->prepare("INSERT INTO `users`(`name`, `password`) VALUES ('$name', '$pswd')");
				$stmt->execute();

				echo "register successful";
				echo "<br><br>";
				echo "<button onclick=\"window.location.href='http://localhost/';\">Go back</button>";
			}
		} catch (PDOException $e) {
			echo "Something went wrong: " . $e->getMessage();
		}
	}
}

if (strlen($name) >= 1 && strlen($password)) {
	$reg = new register();
	$reg->register($con, $name, $password);
} else {
	echo "Fill out the form";
	echo "<br><br>";
	echo "<button onclick=\"window.location.href='http://localhost/';\">Go back</button>";
}
