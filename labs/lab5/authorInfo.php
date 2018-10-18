<?php



include '../../sqlconnection.php';
$dbConn = getConnection("quotes");

function displayAuthorInfo(){
  global $dbConn;
  
  $authorId = $_GET['authorId'];
  
  $sql = "SELECT * FROM q_author WHERE authorId = $authorId";
  
  $stmt = $dbConn->prepare($sql);
  $stmt->execute();
  $record = $stmt->fetch(PDO::FETCH_ASSOC); //We expect only ONE record
 
  //print_r($record);
  
  echo "Bio: " . $record['bio'] . "<br>";
  echo "Day of Birth" . $record['dob'] . "<br>";
  echo "Day of Dead: ". $record['dod'] . "<br>";
  echo "<img src='".$record['picture']."'/>";
 
}

?>

<!DOCTYPE html>
<html>
    <head>
        <style>
             h1{
                text-align: center;
                background-color: #e7efff;
                margin:60px;
                margin-left: 150px;
                margin-right: 150px;
                border-style: dashed;
            }
            body{
                 background-image: url('img/life.jpg');
                 background-size: cover;
            }
            .bio{
                text-align:center;
                background-color: #d1b2ff;
                margin-left: 150px;
                margin-right: 150px;
                border-style: dashed;
            } 
            </style>
        <title> Lab 5: Author Info </title>
    </head>
    <body>

        <h1> Author Info </h1>

        <br>
        <div class="bio">
            <br>
             <?=displayAuthorInfo()?>
              <br>
                 <form method="get" action="index.php">
                <button type="submit">New Quote</button>
                </form>
       <br>
        </div>
        
    </body>
</html>