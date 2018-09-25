<?php
    $deck = range(1,52); //same as $deck = array(1,2,3,4,....)
    shuffle($deck);
    print_r($deck);

    echo "<hr>";
    print_r($deck);
function hand(){
    global $deck;
    //$handPoints = 0
    for($i=1;$i < 6; $i++){
        //echo array_pop($deck) ." ";
        $lastCard = array_pop($deck);
        $faceValue = $lastCard % 13;
        //echo $faceValue . "-";
        //echo $lastCard , " ";
            if($faceValue==0){
                $faceValue = 13;
            }
            $suit = array("clubs","spades","diamonds","hearts");
        echo "<img src='cards/".$suit[rand(0,3)]."/$faceValue.png' alt='$facevalue' title='$faceValue'/>";
    }
}

function displayCard(){
    $suit = array("clubs","spades","diamonds","hearts");
    for($i=1; $i<6; $i++){
    $card = rand(1,13);
    echo "<img src='cards/".$suit[rand(0,3)]."/$card.png' alt='$card' title='$card'>";
    }
   
}

function totalPoints(){
    echo "1";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lab 3: Ace Poker </title>
        <style>
            h1, h2, body{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Ace Poker</h1>
        <h2> Player with the most points wins.</h2>
        
        <?php
        echo "Player 1: ";
        hand();
        echo " Total Points: ";
        totalPoints();
        echo "<br> Player 2: ";
        hand();
        echo " Total Points: ";
        totalPoints();
        ?>
    </body>
</html>