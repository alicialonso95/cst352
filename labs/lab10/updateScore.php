<?php
include '../../sqlconnection.php';
$dbConn = getConnection("lab10_quiz");

$sql= "SELECT * FROM `lab10_quiz` WHERE `email` = :email";
$namedParameters = array();
$namedParameters[":email"] = $_GET['email'];

 $stmt = $dbConn->prepare($sql);
 $stmt->execute($namedParameters);
 $record = $stmt->fetch(PDO::FETCH_ASSOC);
 
 if(empty($record)){   //Email doesn't exist in the database
  $sql = "INSERT INTO `lab10_quiz` (`userId`, `email`, `score`, `attempts`) VALUES (NULL, :email , :score, 1)";
  $namedParameters[':score'] = $_GET['score'];
  $stmt = $dbConn->prepare($sql);
  $stmt->execute($namedParameters);
 }
  else {  //email exists in the database
  $sql= "UPDATE lab10_quiz
           SET score = :score,
	              attempts = attempts + 1
           WHERE email = :email";
   $namedParameters[':score'] = $_GET['score'];
   $stmt = $dbConn->prepare($sql);
   $stmt->execute($namedParameters);
  }
 
 //print_r($record);
 echo json_encode($record);
?>
