<?php

if(!isset($_SESSION)) { 
	session_start();
}

$loggedin = $_SESSION['loggedIn'];
$isAdmin = $_SESSION['id'];

if (isset($_SESSION['loggedIn']) && $loggedin == true && $isAdmin == 1) { ?>


<!DOCTYPE html>
<html lang="eng">

<head>

	<title>Playground</title>

	<!-- css -->
	<link rel="stylesheet" href="../../css/globalFont.css">

	<!-- bootstrap -->
	<!-- CSS only -->
	<link rel="stylesheet"
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
		crossorigin="anonymous">

</head>
<body>

<p>Welcome on the admin panel</p>

</body>
<?php

} else {
    echo "You are not an admin !!";
	echo "<br><br>";
	echo "<button onclick=\"window.location.href='http://localhost/';\">Go to login screen</button>";
    header("Refresh:10; url=http://localhost/");
}

?>