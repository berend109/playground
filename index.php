<?php

	session_start();

    include 'assets/main.php';

?>

<!DOCTYPE html>
<html lang="eng">

<head>

	<title>Playground</title>

</head>
<body>

	<p>Welcome to the playground</p>

	<form action="assets/php/write.php" method="get">

		<input type="text" name="customWorkspace" placeholder="create custom workspace."><br>

		<button>submit</button>
		
	</form>

    <div id="playground-div">
        <?php
            foreach ($scanned_directory as $value) {
                if ($value != 'dotfiles') {
                    if ($value != 'playground') {
                        echo '<form action="../'. $value. '" target="_blank">';
                        echo '<button>'. $value. '</button>';
                        echo '<br>';
                        echo '</form>';
                    }
                }
            }
        ?>
    </div>

</body>
</html>
