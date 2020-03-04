<?php

require_once 'con.php';

$pdo = new connection;
$con = $pdo->connect();

$input = $_POST['input'];

try {
    $sql = "INSERT INTO `projects`(`projectDir`) VALUES ('$input')";
    $con->exec($sql);
    echo "New record created successfully";
}
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;