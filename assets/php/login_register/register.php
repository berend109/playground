<?php

require_once('../conn.php');

$pdo = new connection;
$con = $pdo->connect();
$name = $_POST['name'];
$pswd = $_POST['pswd'];
$pswd = password_hash($pswd, PASSWORD_DEFAULT);

class register {
	public function __construct() {}

	public function register($con, $name, $pswd) {
		try {
			$stmt = $con->prepare("SELECT * FROM `users` WHERE name = ?");
			$stmt->execute([$name]);
			$user = $stmt->fetch();

			if ($user) {
				$_SESSION['name'] = $_POST['name'];
				echo "Username or password allready exists";

				echo "<button onclick=\"window.location.href='../../../';\">Go back</button>";
			} else {
				$stmt = $con->prepare("INSERT INTO `users`(`name`, `password`) VALUES ('$name', '$pswd')");
				$stmt->execute();

				echo "register successful";

				echo "<button onclick=\"window.location.href='../../../';\">Go back</button>";
			}
		} catch (PDOException $e) {
			echo "Something went wrong: ".$e->getMessage();
		}
	}
}

$reg = new register();
$reg->register($con, $name, $pswd);
