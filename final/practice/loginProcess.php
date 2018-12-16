<?php
session_start();  //starts or resumes a session

//verifies that username and password are valid

 include '../../sqlconnection.php';
 $dbConn = getConnection("final_exam");

 $username = $_POST['username'];
 $password = sha1($_POST['password']);

//This sql works but allows SQL INJECTION!! (BECAUSE OF THE SINGLE QUOTES)
 $sql = "SELECT * 
         FROM fp_login 
         WHERE username = '$username' 
         AND   password = '$password' ";

//This sql prevents SQL INJECTION!!
 $sql = "SELECT * 
         FROM fp_login 
         WHERE username = :u;
         AND   password = :password ";

 $namedParameters = array();
 $namedParameters[":u"] = $username;
 $namedParameters[":password"] = $password;
         
 //echo $sql;
 $stmt = $dbConn->prepare($sql);
 $stmt->execute($namedParameters);
 $record = $stmt->fetch(PDO::FETCH_ASSOC); //we're expecting just one record
 
 //print_r($record);
 if (empty($record)){

     header("location: program1.php");
     //alert( "Error: last attempt to login was unsuccessful!");
 } else {

     $_SESSION['adminSesh'] = $record['username'];
     
     header("location: welcome.php"); //redirects to another program.
     //echo "<h3>login Sucessfully!</h3>";
 }

?>
  
  

