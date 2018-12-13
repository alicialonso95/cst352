<?php
session_start();

include '../../sqlconnection.php';
$dbConn = getConnection("books");



function displayReview() {
    global $dbConn;
    
    
    $sql = "SELECT * FROM b_review 
            NATURAL JOIN b_book ";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    //$records = $statement->fetch(); //returns only ONE record
    $records = $statement->fetchAll(PDO::FETCH_ASSOC); //returns multiple records
    
    //print_r($records);
    
    foreach ($records as $record) {
        
        
        echo "<a href='#' class='bookLink' id='". $record["bookId"]. "'>" .$record["title"]. "</a>";
        echo "<br>";
        echo $record['review'] . "<br><br><hr>";
    }
    
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Online Library </title>
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
        
    </head>
    <script>
        $(document).ready(function(){
                $('.bookLink').click(function(){
                    //alert( $(this).attr("id") );
                        $('#bookModal').modal("show");
          
            $.ajax({
            
            type: "GET",
            url: "bookInfo.php",
            dataType: "json",
            data: { "bookId":$(this).attr("id") },
            success: function(data,status) {
               //alert(data.description);
               $("#bookTitle").html(data.title);
               $("#year").html(data.year);
               $("#synopsis").html(data.synopsis);
               $("#picture").attr("src", data.picture);
               $("#genre").html(data.genre);
               $("#author").html(data.author);
               $("#bio").html(data.bio);

            },
            complete: function(data,status) { //optional, used for debugging purposes
               //alert(status);
            }
            
                        });//ajax
                    }); 
                });
    </script>
    <style>
            body{
                color: white;
                text-align: center;
                color: black;
                background:#caefff;
                }
            h1{
                text-align: center;
            }
             #carouselExampleIndicators{
                width: 400px;
                margin: auto;
            }
            .center{
                  margin: auto;
                  width: 50%;
                  padding: 10px;
            }
            
    </style>
    <body>
        
        <?php
    include "header.php";
    ?>

    
    <form action="books.php">
        
        <input type="submit" class="btn btn-primary btn-lg"value="Browse Books"/><br><br>
        
    </form>
    <h2>Editor's Picks: </h2>
    <div class="center">
    <?=displayReview()?>  
    </div>
    
    <!-- Modal -->
<div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="bookInfo">
     <!-- this is an html element -->
     <img id="picture" src="" width="150" height ="200"></img><br>
     <h3><i><span id="genre"></span></i></h3> <br>
     <h2><span id="author"></span></h2> <br>
     <span id="synopsis"></span> <br>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
    
<hr>
    </body>
     <?php
    include "footer.php";
    ?>
</html>