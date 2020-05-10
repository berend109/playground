<!DOCTYPE html>
<html lang="eng">

<head>

	<title>Playground</title>

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="assets/css/logAndRegisterDiv.css">

</head>
<body>

	<div id="logAndRegisterDiv">
		<p>Welcome to the playground</p>

		<div id="login-div">
			<form method="post" action="assets/php/login.php">
				<p>login to go to your personal playground</p>
				<input type="text" placeholder="name">
				<input type="password" placeholder="password">
				<button>Log in</button>
			</form>
		</div>

		<div id="register-div" hidden>
			<form method="post" action="assets/php/register.php">
				<p>get yourself an account to this awesome playground</p>
				<input type="text" placeholder="name">
				<input type="password" placeholder="password">
				<button>register</button>
			</form>
		</div>

		<div id="changeLoginAndRegisterButton">
			<button>Register</button>
		</div>
	</div>

	<!-- javascript -->
	<script src='assets/js/loginRegisterForm.js'></script>

</body>
</html>
