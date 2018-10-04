<?php

$zodiac = array("rat","ox","tiger","rabbit","dragon","snake","horse","goat","monkey","rooster","dog","pig");

    function years($startYear, $endYear){
        global $zodiac;
        $arrayIndex = 0;
        $startYear = 1900;
        $endYear = 2000;
        for ($i=$startYear; $i<=$endYear; $i+=4){
         
         echo "<li> Year $i";
         
         if ($i == 1776){
            echo "<strong> USA INDEPENDENCE! </strong>";
        }
        
        if ($i % 100 == 0){
            echo "<strong> Happy New Century!</strong>";
        }
        
        echo "</li>";
        
        echo "<img src='img/".$zodiac[$arrayIndex].".png'>";
        
        $arrayIndex++;
        if ($arrayIndex == 12){
            $arrayIndex = 0;
        }
    }
    }
?>


<!DOCTYPE html>
<html>
    <head>
        
        <style>
            html{
                text-align: center;
            }
        </style>
        <title> Chinese Zodiac </title>
    </head>
    <body>
        
        <h1> Chinese Zodiac Years</h1>
        <form method="get">
            Start Year:
            <input type="text" name="" size="15" placeholder="" value="<?=$_GET["keyword"]?>"/>
            <br> End Year:           
           <input type="text" name="" size="15" placeholder="" value="<?=$_GET["keyword"]?>"/>
           <br>
           <input type="submit" name="submitBtn" value="Submit" />
           <br>
           <ul>
            <?php
            years($startYear, $endYear);
            ?>
            </ul> 
    </body>
</html>