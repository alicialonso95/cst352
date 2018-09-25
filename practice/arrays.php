<?php

    $symbols = array("orange","seven");
    echo $symbols[0];

    array_push($symbols,"lemon");//adds items at end
    print_r($symbols);//displays whole array
    $symbols[] = "grapes"; //adds item at end
    echo "<hr>";
    print_r($symbols);//displays whole array
    
    echo "<hr>";
    $symbols[2] = "BAR";
    
    print_r($symbols);//displays whole array
    
    unset($symbols[2]);//deletes item from array
    echo "<hr>";
    print_r($symbols);
    
    $symbols = array_values($symbols);
    echo "<hr>";
    print_r($symbols);
    
    sort($symbols);//ascending order
    //r_sort($symbols);//descending order
    echo "<hr>";
    print_r($symbols);
    
    array_push($symbols,"lemon", "bar"); //adding two more elements
    print_r($symbols);
    
    display_array();
    
    display_random_element();
    
    function display_random_element(){
        global $symbols;
        
        echo "<hr>";
        echo "Random value: <br>";
        //$randomIndex = rand(0,count($symbols) - 1); // minus 1 cuz count in how many elements but array in 5 doesnt exist
        //echo $randomIndex;
        //echo $symbols[$randomIndex];
        echo $symbols[rand(0, count($symbols) - 1)];
        //echo "<br><img src='csumb_logo-1.png;'>";
    }
    
    
    function display_array(){
        global $symbols;
        echo "<hr> Here is the content of the array: <br>";
        //print_r($symbols);
        //$i=$i+2 adds more than one (two)
        //concatinate use commas and dots ->  . ", "
        for($i = 0; $i < count($symbols); $i++){//count() returns size of array
            echo $symbols[$i] . ", ";
        }
    }
    
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Review: Arrays</title>
    </head>
    <body>
        <img src="../labs/lab2/img/lemon.png">;
    </body>
</html>