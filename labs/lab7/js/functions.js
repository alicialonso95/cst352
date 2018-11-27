var randomNumber = Math.floor(Math.random() * 99) +1;
	            var guesses = document.querySelector('#guesses');
	            var lastResult = document.querySelector('#lastResult');
	            var lowOrHi = document.querySelector("#lowOrHi");
	            
	            var guessSubmit = document.querySelector('.guessSubmit');
	            var guessField = document.querySelector('#guessFiled');
	            
	            var guessCount = 1;
	            var resetButton = document.querySelector('#reset');
	            resetButton.style.display = "none";
	             var winTimes = 0;
	            var lossTimes = 0;
	            console.log(randomNumber);
	            
	           function checkGuess(){
	                var userGuess = Number(guessField.value);
	                if(guessCount === 1){
	                    guesses.innerHTML = 'Previous guesses: ';
	                }
	                 // guesses.innerHTML += userGuess + ' ';
	                if(userGuess === randomNumber) {
	                    guesses.innerHTML += userGuess + ' ';
	                    lastResult.innerHTML = "Congratulations! You got it right!";
	                    lastResult.style.color = "white ";
	                    lastResult.style.backgroundColor = 'green';
	                    lowOrHi.innerHTML = " ";
	                     setGameOver();
	                    winTimes++;
	                    $("#wins").html(winTimes);
	                    setGameOver();
	                }
	                else if(guessField.value == 0){
	                    $("#lowOrHi").html("Guess field is empty.. enter a value");
	                    $("#lowOrHi").css('color', 'green');
	                    guessCount--;
	                }
	                else if(guessCount === 7){
	                    guesses.innerHTML += userGuess + ' ';
	                    lastResult.innerHTML = 'Sorry, you lost!';
	                    lastResult.style.color = "white ";
	                     setGameOver();
	                    lossTimes++;
	                    $("#losses").html(lossTimes);
	                    setGameOver();
	                }
	                else if($("#guessFiled").val() > 99){
	                    $("#lowOrHi").html("Number can't be higher than 99");
	                   lowOrHi.style.backgroundColor = 'white';
	                    $("#lowOrHi").css('color', 'green');
	                    guessCount--;
	                }
	                
	                else{
	                    guesses.innerHTML += userGuess + ' ';
	                    lastResult.innerHTML = "Wrong! " + (7-guessCount) + " guesses left";
	                    lastResult.style.backgroundColor = 'red';
	                    if(userGuess < randomNumber){
	                        lowOrHi.innerHTML = 'last guess was too low!';
	                    }
	                    else if(userGuess > randomNumber){
	                        guesses.innerHTML += userGuess + ' ';
	                        lowOrHi.innerHTML = 'Last guess was too high!';
	                    }
	                }
	            guessCount++;
	            guessField.value = '';
	            guessField.focus();
	            
	            }
	            
	            guessSubmit.addEventListener('click', checkGuess);
	            function setGameOver(){
	                guessField.disabled = true;
	                guessSubmit.disabled = true;
	                resetButton.style.display = "inline";
	                resetButton.addEventListener('click', resetGame);
	            }
	             function resetGame(){
	                guessCount = 1;
	                
	                var resetParas = document.querySelector('.resultParas p');
	               for (var i = 0 ; i < resetParas.length ; i++) {
	                resetParas[i].textContent = '';
	                }
	                
	                resetButton.style.display = 'none';
	                
	                guessField.disabled = false;
	                guessSubmit.disabled = false;
	                guessField.value = '';
	                guessField.focus();
	                
	                lastResult.style.backgroundColor = 'white';
	                randomNumber = Math.floor(Math.random() * 99) + 1;
	                //console.log(randomNumber);
	            }
	            

