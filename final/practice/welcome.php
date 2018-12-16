<?php
 include '../../sqlconnection.php';
 $dbConn = getConnection("final_exam");
 
$_SESSION['userId']=$userId;

 function displayTime() {
    global $dbConn;
    
    $sql = "UPDATE fp_login SET lastLogin = now() WHERE `userId` = :userId";
         
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $login = $stmt->fetch(PDO::FETCH_ASSOC);
 
   foreach ($login as $login) {
        
       echo "last Log time : " + lastLogin;
        
   }
       
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Section</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" type="text/css" /> 
        <style>
            
            form {
                display:inline-block;
            }
            
        </style>
        
        <script>
        
        </script>
    </head>
    <body>
        <div class="jumbotron">
            <h1>Admin Section</h1>
           <h3>Login Sucessfully! <?= $_SESSION['adminSesh'] ?></h3>
           <h3 id="loginStatus"></h3>
           <?php displayTime() ?>
        </div>
        <br><br>
        
        
        <form action="logout.php">
            <input type="submit" name="logout" value="Logout"/>
        </form>
        
        <br><br>
       
   </body>
</html>