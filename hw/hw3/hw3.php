<?php
            $answer1 = $_POST['question-1'];
            $answer2 = $_POST['question-2'];
            $answer3 = $_POST['question-3'];
            $answer4 = $_POST['question-4'];
            $answer5 = $_POST['question-5'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            
            echo "<hr>";
            if (empty($_POST['name'])){
        echo "(You must input your name.)<br>";
            }else{
            $name = $_POST['name'];
            $favcandy = $_POST['favcandy'];
            echo "$name, you got <div id='results'>$totalCorrect / 5 correct <hr></div>";
            }
            if (empty($_POST['favcandy'])){
        echo "(You must input your favorite candy.)<br>";
            }else{
            $name = $_POST['name'];
            $favcandy = $_POST['favcandy'];
            echo "You favorite candy is $favcandy! Fantastic choice!<br>";
            }
            if (empty($_POST['question-1'])){
                echo "(You did not answer question 1.)<br>";
            }
            if (empty($_POST['question-2'])){
                echo "(You did not answer question 2.)<br>";
            }
            if (empty($_POST['question-3'])){
                echo "(You did not answer question 3.)<br>";
            }
            if (empty($_POST['question-4'])){
                echo "(You did not answer question 4.)<br>";
            }
            if (empty($_POST['question-5'])){
                echo "(You did not answer question 5.)<br>";
            }
            
            //print_r($favcandy);
            
            echo "<hr>";
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                text-align: center;
                color: black;
                background-image: url("img/candy2.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                font-size: 20px;
            }
            h1 {
                text-align: center;
                color: green;
                text-shadow: 3px 2px orange;
                margin: 25px 0;
                text-transform: uppercase; letter-spacing: 3px;
                border: 1px solid black;
                background-color: lightpink;
                
            }
            
            h3{
                font-size: 30px;
                color: blue;
                text-shadow: 1px 1px black;
            }
            
            label{
                color: red;
                font-size: 20px;
                text-shadow: 1px 1px black;
            }
        </style>
        <title> Where Does Your Favorite Candy Come From? </title>
    </head>
    <body>
        <h1> Where Does Your Favorite Candy Come From?</h1>
        <form method="post" id="quiz">
		
        		<label for="name">Enter your name:</label><br>
                <input id="name" type="name" name="name">

                <br><br>

                <label for="favcandy">Enter your favorite candy: </label><br>
                <textarea id="favcandy" name="favcandy"></textarea>
                
            <ol>
            
                <li>
                
                    <h3>1) Gummy Worms?</h3><br>
                    
                    <img src="img/gummyworms.jpg" height="300" width="300"/>
                    
                    <div>
                        <input type="radio" name="question-1" id="answer-A" value="A" />
                        <label for="answer-A">A) Switzerland </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1" id="answer-B" value="B" />
                        <label for="answer-B">B) Germany</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1" id="answer-C" value="C" />
                        <label for="answer-C">C) USA</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1" id="answer-D" value="D" />
                        <label for="answer-D">D) Poland</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>2) Haribo?</h3><br>
                    
                    <img src="img/haribo.jpg" height="300" width="300"/>
                    
                    
                    <div>
                        <input type="radio" name="question-2" id="answer-A" value="A" />
                        <label for="answer-A">A) Germany</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2" id="answer-B" value="B" />
                        <label for="answer-B">B) Mexico</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2" id="answer-C" value="C" />
                        <label for="answer-C">C) Italy</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2" id="answer-D" value="D" />
                        <label for="answer-D">D) Poland</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>3) KitKat?</h3><br>
                    
                    <img src="img/kitkat.jpg" height="300" width="300"/>
                    
                    
                    <div>
                        <input type="radio" name="question-3" id="answer-A" value="A" />
                        <label for="answer-A">A) China</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3" id="answer-B" value="B" />
                        <label for="answer-B">B) Canada</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3" id="answer-C" value="C" />
                        <label for="answer-C">C) United Kingdom</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3" id="answer-D" value="D" />
                        <label for="answer-D">D) North Korea</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>4) Jawbreakers?</h3><br>
                    
                    <img src="img/jawbreaker.jpg" height="300" width="300"/>
                    
                    <div>
                        <input type="radio" name="question-4" id="answer-A" value="A" />
                        <label for="answer-A">A) Japan</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4" id="answer-B" value="B" />
                        <label for="answer-B">B) Italy</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4" id="answer-C" value="C" />
                        <label for="answer-C">C) Mexico</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4" id="answer-D" value="D" />
                        <label for="answer-D">D) USA</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>5) Mazapan?</h3><br>
                    
                    <img src="img/mazapan.jpg" height="300" width="300"/>
                    
                    
                    <div>
                        <input type="radio" name="question-5" id="answer-A" value="A" />
                        <label for="answer-A">A) Canada</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5" id="answer-B" value="B" />
                        <label for="answer-B">B) Spain</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5" id="answer-C" value="C" />
                        <label for="answer-C">C) USA</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5" id="answer-D" value="D" />
                        <label for="answer-D">D) Mexico</label>
                    </div>
                
                </li>
                
            
            </ol>
            
            <input type="submit" value="Submit Quiz" />
		
		</form>
	
	</div>
    </body>
</html>