<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
    </head>
    <body>
        
        <?php

   $randomValue1 = rand(0,3);
    displaySymbol($randomValue1);
    $randomValue2 = rand(0,3);
    displaySymbol($randomValue2);
    $randomValue3 = rand(0,3);
    displaySymbol($randomValue3);
    
     function displaySymbol($random_value) {
            
                $random_value = rand(0,3);
                
               if ( $random_value == 0) {
                    $symbol = "seven";
                }
                else  if ($random_value == 1) {
                    $symbol = "cherry";
                } 
                else if ($random_value == 2) {
                    $symbol = "orange";
                }
                    
                    echo "<img src='img/$symbol.png' alt='$symbol' width='70'title=\"".ucfirst($symbol)."\"/>";
        }
   
    displayPoints($randomValue1, $randomValue2, $randomValue3);
    
    function displayPoints($randomValue1, $randomValue2, $randomValue3) {
        
        echo "<div id='output'>";
        if ($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3) {
        switch ($randomValue1){
                case 0: $totalPoints = 1000;
                        echo "<h1> Jackpot!</h1>";
                        break;
                case 1: $totalPoints = 500;
                        break;
                case 2: $totalPoints = 250;
                        break;

            }
    
            echo "<h2> You won $totalPoints points! </h2>";
    } else {
        echo "<h3> Try Again! </h3>";
    }
    echo "</div>";
    }
    ?>
    
    
    
    
    
    
    
    
    <div id="main">
    <form>
        <input type="submit" value="Spin!"/>
    </form>
    </div>
    <style>
        @import url("css/styles.css");
    </style>
    </body>
    
    </html>
    