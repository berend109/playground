<?php

if(!isset($_SESSION)) 
{ 
	session_start(); 
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
    echo "You are not logged in !!";
    header("Refresh:5; url=../../../index.php");
}

?>

<!DOCTYPE html>
<html lang="eng">

<head>

	<title>Playground</title>

	<!-- css -->
	<link rel="stylesheet" href="../../css/mainScreen/globalFont.css">

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
		if (isset ($_SESSION['loggedin']) == true) {
			echo $_SESSION['name'];
		} else {
			echo 'Username';
		}
	?>
	</p>

	<div id="playground-div">
		<?php
		require_once 'displayWorkspaces.php';
		?>
	</div>

	<div id="addWorkspace">
		<form  method='POST' action='send.php'>
			<br><br> <!--break before styling --> 
			<p>Add your new workspace to the playground</p>
			<p>Dir: <input type='text' name='input'/></p>
			<button class="btn btn-success" type='submit'>Submit</button>
		</form>
	</div>

	<div id="logout">
		<br><br> <!--break fore styling -->
		<p>logout of your playground here !!</p>
		<button class="btn btn-danger">Sign out</button>
	</div>

</body>
</html>
