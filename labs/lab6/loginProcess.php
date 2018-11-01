<?php
session_start();


//verifies that username and passord is valid

include '../../sqlconnection.php';
$dbConn = getConnection("quotes");


$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT *
        FROM q_admin
        WHERE username = :username
        AND password = :password ";
        
$namedParameters = array();
$namedParameters[":username"] = $username;
$namedParameters[":password"] = $password;

//echo $sql;
$stmt = $dbConn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);

//print_r($record);

if(empty($record)){ 
    
    echo "Error: Wrong Username or Password!";
    
    
} else {
    
        $_SESSION['adminName'] = $record['firstName'] . " " . $record['lastName'];
    
    header("location: main.php");
    
    
}

?>

<style>
            h1,body{
                text-align:center;
                background-color: #9ecfff;
            }
        </style>