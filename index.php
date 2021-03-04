<?php
session_start();
include_once 'assets/php/db/connection.php';
?>

<!DOCTYPE html>
<html lang="eng">

<head>
	<meta charset="utf-8" />

	<title>Playground</title>

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="assets/css/logAndRegister.css">
	<link rel="stylesheet" type="text/css" href="assets/css/globalFont.css">

</head>

<body>

	<div id="logAndRegister">
		<p>Welcome to the playground</p>

		<div id="login-div">
			<form name="loginForm" method="post" onsubmit="return validateForm()" action="./assets/php/usrLoging/login.php">
				<p>login to see your personal playground</p>
				<label>
					<input name="name" type="text" placeholder="name" required>
				</label>
				<label>
					<input name="pswd" type="password" placeholder="password" required>
				</label>
				<button>Log in</button>
			</form>
		</div>

		<div id="register-div" hidden>
			<form name="registerForm" method="post" onsubmit="return validateForm()" action="./assets/php/usrLoging/register.php">
				<!-- There is no security work done. so for now for what ever reason there is a warning -->
				<h1>Don't add your personal info</h1>
				<h1>Work in progress</h1>
				<p>get yourself an account to have your own playground</p>
				<input name="name" type="text" placeholder="name" required>
				<input name="pswd" type="password" placeholder="password" required>
				<button>register</button>
			</form>
		</div>

		<div id="swapLoginRegister">
			<button id="button" type="button" onclick="swapLoginRegister()">Register</button>
		</div>
	</div>

	<!-- javascript -->
	<script src='assets/js/loginRegisterForm.js'></script>
	<script src='assets/js/validateForm.js'></script>

</body>

</html>