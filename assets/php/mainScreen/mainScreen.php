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

		$scannedDir = getDir($con, $scannedDir);
		checkDir($scannedDir);
		?>
	</div>

	<div id="addWorkspace">
		<form  method='POST' action='send.php'>
			<br><br> <!--break before styling --> 
			<p>Add your new workspace to the playground</p>
			Dir: <input type='text' name='input'/>
			<button type='submit'>Submit</button>
		</form>
	</div>

	<div id="logout">
		<form methode="post" >
			<br><br> <!--break before styling --> 
			<p>logout of your playground here !!</p>
			<button><a href="signout.php">Sign out</button></a>
		</form>
	</div>

</body>
</html>
