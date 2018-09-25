<?php
    function displayBackground(){
        $background = array("1","2","3","4",);
        echo "<img src='img/room/".$background[rand(0,3)].".jpg' class='displayBackgrounds'>"; 
        
        }
    
    function displayLogo(){
        $logo = array("1","2","3","4","5");
        echo "<img src='img/logos/".$logo[rand(0,3)].".png' width=280 height=300>";
        echo "<br>";
        }
    
    function character(){
        for($i=1; $i<4; $i++){
        $character = range(1,10);
        echo "<img src='img/people/".$character[rand(0,9)].".png' title='$character' width=300 height=500 class='characters'>";}
        }
    
    function housePoints(){
            echo(rand(10,10000));
        }
        //function trio(){
            //global $character;
            //if ($character == '1.png' && $character == '2.png' $character == '3.png'){
            //echo "<br>Congrats! You got the trio together!";
            //}
        //}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="hw2.css.php">
        <title>HW 2: Who's Lurking at Hogwarts? </title>
    </head>
    <body>
        <h1>Who's Lurking at Hogwarts?</h1>
        <?php
        displayLogo()
        ?>
        <br>
        <div id="room">
            <form>
                <input type="submit" value="Next Room"/>
            </form>
            <div class="hp">
            House Points:
            </div>
            <?php
                housePoints();
                ?>
                <hr>
                <?php
                global $background;
                displayBackground();
                character();
           //trio();
            ?>
            <footer>
         <hr> <br>Cal State Monterey Bay <br>CST 352: Web Scripting. 2018; Alonso-Garcia, Alicia<br><br>
    </footer>
    </body>
</html>