<?php

if(!isset($_SESSION)) { 
	session_start();
}

$loggedin = $_SESSION['loggedIn'];

if (isset($_SESSION['loggedIn']) && $loggedin == true) { ?>

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

	<p>Welcome to your playground:
	<?php
		if ($_SESSION['loggedIn']) {
			echo $_SESSION['name'];
		} else {
			echo 'Username';
		}
	?>
	</p>

	<?php 
	
	// id 1 == admin
	if($_SESSION['id'] == 1) { 
		echo "je bent dus een admin"; 
	} else { 
		echo "je bent dus geen admin ";
	}
	
	echo '<div id="adminpanel">';
	echo '<form action="./adminScreen.php">';
	echo '<button class="btn btn-danger btn-lg">Go to admin panel</button>';
	echo '</form>';
	echo '</div>';
	
	?>

	<div id="playground-div">
		<?php
			require_once '../directory/displayDirectory.php';
		?>
	</div>

	<div id="addWorkspace">
		<form  method='POST' action='../directory/sendDirectory.php'>
			<br><br> <!--break before styling -->
			<p>Add your new workspace to the playground</p>
			<p>Dir: <input type='text' name='input'/></p>
			<button class="btn btn-success" type='submit'>Submit</button>
		</form>
	</div>

	<div id="logout">
		<form action='../usrLoging/logout.php'>
			<br><br> <!--break fore styling -->
			<p>logout of your playground here !!</p>
			<button class="btn btn-danger">Sign out</button>
		</form>
	</div>

</body>
</html>
<?php

} else {
    echo "You are not logged in !!";
	echo "<br><br>";
	echo "<button onclick=\"window.location.href='http://localhost/';\">Go to login screen</button>";
    header("Refresh:10; url=http://localhost/");
}

?>