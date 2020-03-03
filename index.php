<?php

	// php files
	require_once 'assets/php/search.php';

?>

<!DOCTYPE html>
<html lang="eng">

<head>

	<title>Playground</title>

</head>
<body>

	<p>Welcome to the playground</p>

    <div id="playground-div">
        <?php
            foreach ($scanned_directory as $value) {
                if ($value != 'dotfiles') {
                    if ($value != 'playground') {
						if ($value != '.idea') {
							echo '<form action="../'. $value. '" target="_blank">';
							echo '<button>'. $value. '</button>';
							echo '<br>';
							echo '</form>';
						}
                    }
                }
            }
        ?>
		<form action="assets/php/insertNewWorkspace.php">
			<p>Add new workspace !!!</p>
			<input>
    		<button type="submit">Sumbit</button>
		</form>
	</div>

</body>
</html>
