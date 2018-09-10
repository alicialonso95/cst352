<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
    </head>
    <body>
        
        <?php
        
    function displaySybmol($random_value) {
        
        
    //$random_value = rand(0,3);
    
    if ( $random_value == 0) {
        $symbol = "seven";
    }
    else if ($random_value == 1) {
        $symbol = "cherry";
    } 
    else {
        $symbol = "orange";
    }
    
        
        echo " <img src='img/$symbol.png' alt='$symbol' title='$symbol'/>";
    }
    
    $randomValue1 = rand(0,3);
    displaySybmol($randomValue1);//calling the function
    
     $randomValue2 = rand(0,3);
    displaySybmol($randomValue2);
    
     $randomValue3 = rand(0,3);
    displaySybmol($randomValue3);
    
    echo "<br>Random Value 1: "  . $randomValue1 . "<br>";
    echo "Random Value 2: "  . $randomValue2 . "<br>";
    echo "Random Value 3: "  . $randomValue3 . "<br>";
    
    
    if ($randomValue1 == $randomValue2 AND $randomValue2 == $randomValue3) {
      echo "JACKPOT!";  
    }

    
    
    ?>
    </body>
</html>