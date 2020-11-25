<?php

if(!isset($_SESSION)) 
{ 
	session_start(); 
}

require_once('../conn.php');

$pdo = new connection;
$con = $pdo->connect();
$name = $_POST['name'];
$pswd = $_POST['pswd'];

class login {
	public function __construct() {}

	public function login($con, $name, $pswd) {
		$stmt = $con->prepare("SELECT * FROM `users` WHERE name = ?");
        $stmt->execute([$name]);
		$user = $stmt->fetch();
		
		if ($user && password_verify($pswd, $user['password'])) {
			$_SESSION["name"] = $_POST['name'];
			$_SESSION["loggedin"] = true;
			header("Refresh:0; url=../mainScreen/mainScreen.php");
		} else {
			echo "wrong password or username
				<a href=\"../../../index.php\">TRY AGAIN !!</a>";
		}
	}
}

$login = new login();
$login->login($con, $name, $pswd);