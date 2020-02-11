<?php

$directory = 'C:\\xampp\\htdocs\\workspace\\github\\berend109\\';
$scanned_directory = array_diff(scandir($directory), array('..', '.'));
