<?php

session_start();


if (!isset($_SESSION['adminName'])) {
    
    header("Location: login.php");
    
}

include '../../sqlconnection.php';
$dbConn = getConnection("quotes");

$sql = "DELETE FROM q_author WHERE authorId = " . $_GET['authorId'];
$stmt = $dbConn->prepare($sql);
$stmt->execute();

header("Location: main.php");

?>
