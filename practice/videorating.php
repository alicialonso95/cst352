<?php include "config.php"; ?>
<!-- CSS -->
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href='jquery-bar-rating-master/dist/themes/fontawesome-stars.css' rel='stylesheet' type='text/css'>
 
<!-- Script -->
<script src="jquery.js" type="text/javascript"></script>
<script src="jquery-bar-rating-master/dist/jquery.barrating.min.js" type="text/javascript"></script>
<?php 
include '../sqlconnection.php';

//$dbConn = getConnection("rating");

function displayAllRatings(){
    global $dbConn;
    
    $sql = "SELECT id, rating
              FROM rating
              ORDER B Y id";
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $rating = $stmt->fetchAll(PDO::FETCH_ASSOC); 
   
    $rating = $_GET['rating'];
 
    foreach ($rating as $rating) {
     echo "Rating: " . $record['rating'] . "<br>";
    
    }   
    return $rating;
}
?>
  <script>
  $(document).ready(function(){
        $('.rateLink').click(function(){
          //alert( $(this).attr("id") );
          
        //  $('#petInfoModal').modal("show");
          
            $.ajax({
            
            url: 'co,nfig.php',
            type: 'GET',
            data: {id:id,rating:rating},
            dataType: 'json',
            success: function(data){
             // Update average
            // var average = data['averageRating'];
             //$('#avgrating_'+postid).text(average);
            
            },
            complete: function(data,status) { //optional, used for debugging purposes
               //alert(status);
            }
            
            });//ajax
        }); 
  });
      
  </script>
  <center>
  <?php 
    $rating = displayAllRatings();
    
    foreach($rating as $rating) {
        echo "Name: ". "<a href='#' class='rateLink' id='". $rating["id"]. "'>" .$rating["rating"]. "</a><br>";
        //echo "Type: " .$rating["type"]. "<br><br>" ;
    }
  ?>
  </center>




<!DOCTYPE html>
<html>
        <title> Video Rating </title>
    </head>
    <body>

    <h1> Rate this video! </h1>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/sB2T0sQBUdw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
        <br> <h2>Stars: </h2><br>
        <form>
          <input type="radio" name="star" value="one" checked>One
          <input type="radio" name="star" value="two"> Two
          <input type="radio" name="star" value="three"> Three  
          <input type="radio" name="star" value="four"> Four
          <input type="button" name="sumbit" value="Rate!"> Rate!
        </form> 
     <?=displayAllRatings()?>           
    </body>
</html>