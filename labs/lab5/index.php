<?php

include '../../sqlconnection.php';
$dbConn = getConnection("quotes");

//function displayAllQuotes(){
  //  global $dbConn;
    //$sql = "SELECT * FROM q_quotes";
    //$statement = $dbConn->prepare($sql);
    //$statement->execute();
    //$records = $statement->fetchAll(PDO::FETCH_ASSOC);
    //print_r($records);
    //foreach ($records as $record) {
        
      //  echo $record['quote'] . "<br>";
        
    //}
//}




function displayRandomQuote(){
    global $dbConn;
    
    $randomRecord = rand(0,26);
    $sql = "SELECT * FROM q_quotes
            NATURAL JOIN q_author
            LIMIT $randomRecord";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    //$records = $statement->fetchAll(PDO::FETCH_ASSOC);
    //print_r($records);
    foreach ($records as $record) {
        
        echo $record['quote'] . "<br>";
        echo "<a target='authorInfo' href='authorInfo.php?authorId=".$record['authorId']."'>";
        echo  $record['firstName'] . "  " . $record['lastName'];
        echo "</a>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            h1, body{
                text-align: center;
            }
        </style>
        <title> Lab 5: Displaying Random Quotes</title>
    </head>
    <body>
<h1> Random Famous Quotes!</h1>
        test <br><br>

<?= displayRandomQuote(); ?>



    </body>
</html>