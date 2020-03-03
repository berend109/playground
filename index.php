<?php

	// php files
	require_once 'assets/php/search.php';
	
	// comment becaue not needed while testing 
	// require_once 'assets/php/send.php';

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
		<!-- Working code -->
		<!-- comment because it is not needed any more while testing -->
		<!-- <form  method='POST'>
			<p>Add your new workspace to the playground</p>
			Dir: <input type='text' name='input'/>
    		<button type='submit'>Submit</button>
		</form> -->
	</div>

</body>
</html>
