<?php

include '../../sqlconnection.php';
$dbConn = getConnection("quotes");

function displayAllQuotes() {
    global $dbConn;
    
    $sql = "SELECT * FROM q_quotes";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    //$records = $statement->fetch(); //returns only ONE record
    $records = $statement->fetchAll(PDO::FETCH_ASSOC); //returns multiple records
    
    //print_r($records);
    
    foreach ($records as $record) {
        
        echo $record['quote'] . "<br>";
        
    }//end Foreach
    
} //endFunction


function displayRandomQuote() {
    global $dbConn;
    
//1
 $sql = "SELECT quote, STRING(QUOTE) = 'L' 
 FROM q_quotes NATURAL JOIN q_author 
 ORDER BY LENGTH(quote) desc";
 
    
//2
    $sql = "SELECT firstName, lastName, 'M', country 
            FROM q_quotes NATURAL JOIN q_author 
            ORDER BY LENGTH(quote) 
            DESC LIMIT 3,10";
            
//3
    $sql = "SELECT quote, LENGTH(quote) 
    FROM q_quotes NATURAL JOIN q_author 
    ORDER BY LENGTH(quote) ASC limit 5,1";

//4
    $sql = "SSELECT quote, 'philosophy' FROM q_quotes 
    NATURAL JOIN q_author 
    ORDER BY LENGTH(quote) 
    ASC";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    //$records = $statement->fetch(); //returns only ONE record
    $records = $statement->fetchAll(PDO::FETCH_ASSOC); //returns multiple records
    
    //print_r($records);
    
    foreach ($records as $record) {
        
        echo $record['quote'] . "<br>";
        echo $sql;
    }
    
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
            .quote{
                text-align:center;
                background-color: #d1b2ff;
                margin-left: 150px;
                margin-right: 150px;
                border-style: dashed;
            }  
        </style>
        <title> Lab 5: Random Quotes</title>
    </head>
    <body>
<h1> Random Famous Quotes</h1>

<div class="quote">
<br>
<?= displayRandomQuote(); ?>
<br><br>
    
</div>
    </body>
</html>