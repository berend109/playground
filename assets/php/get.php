<?php

require_once 'con.php';

$pdo = new connection;
$con = $pdo->connect();

$scannedDir = array();

function getDir($con, $scannedDir) {
    try {
        $stmt = $con->prepare("SELECT `projectDir` FROM `projects` WHERE 1");
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(($stmt->fetchAll()) as $k=>$v) {
            array_push($scannedDir, $v);
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;

    return $scannedDir;
}