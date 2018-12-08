<?php
    include '../sqlconnection.php';
    $dbConn = getConnection("rating");
    
    function displayRating(){
        global $dbConn;
        
        $sql = "SELECT AVG(rating) 
                    AS averageRating 
                    FROM rating
                    WHERE id = ".$_GET['id'];
                 
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $rating = $stmt->fetch(PDO::FETCH_ASSOC); 
        
        return $rating;
    }

    $ratDisp=displayRating();
   
   //DO NOT DISPLAY ANYTHING OTHER THAN JSON FORMAT IN WEB APIS
    
    echo json_encode($ratDisp);
?>