<!DOCTYPE html>
<html lang="eng">

<head>

	<title>Playground</title>

</head>
<body>

	<p>Welcome to the playground</p>

    <div id="playground-div">
        <?php
			require_once 'assets/php/displayWorkspaces.php';
			
			$scannedDir = (getDir($con, $scannedDir));
			checkDir($scannedDir);
        ?>

		<form  method='POST'>
			<br><br>
			<p>Add your new workspace to the playground</p>
			Dir: <input type='text' name='input'/>
    		<button type='submit'>Submit</button>
		</form>
	</div>

</body>
</html>
