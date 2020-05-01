<?php

require_once 'conn.php';

$pdo = new connection;
$con = $pdo->connect();

$input = $_POST['input'];

// windows setting
$input = addslashes($input);

echo $input;

try {
    $sql = "INSERT INTO `projects`(`projectDir`) VALUES ('$input')";
    $con->exec($sql);
    echo "New record created successfully";
}
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

echo '<br>';
echo '<br>';
echo("<button onclick=\"location.href='../../index.php'\">Back to Home</button>");
