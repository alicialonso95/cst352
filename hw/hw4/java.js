var myQuestions = [
    {
        question: "<br>When did Stephen King's Pet Semetary release?<br>",
        answers: {
            a: '1995<br>',
            b: '1989<br>',
            c: '1990<br>',
            d: '2000<br>'
        },
        correctAnswer: 'b'
    },
    {
        question: "What classic movie came out in 1960?<br>",
        answers: {
            a: 'To Kill a Mockingbird<br>',
            b: 'Casablanca<br>',
            c: 'Psycho<br>',
            d: 'Gone With the Wind<br>'
        },
        correctAnswer: 'c'
    }
];
 var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');
 generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);
 function generateQuiz(questions, quizContainer, resultsContainer, submitButton){
     function showQuestions(questions, quizContainer){
        // we'll need a place to store the output and the answer choices
        var output = [];
        var answers;
         // for each question...
        for(var i=0; i<questions.length; i++){
            
            // first reset the list of answers
            answers = [];
             // for each available answer...
            for(letter in questions[i].answers){
                 // ...radio button
                answers.push(
                    '<label>'
                        + '<input type="radio" name="question'+i+'" value="'+letter+'">'
                        + letter + ': '
                        + questions[i].answers[letter]
                    + '</label>'
                );
            }
             // add this question and its answers to the output
            output.push(
                '<div class="question">' + questions[i].question + '</div>'
                + '<div class="answers">' + answers.join('') + '</div>'
            );
        }
         // finally combine our output list into one string of html and put it on the page
        quizContainer.innerHTML = output.join('');
    }
     function showResults(questions, quizContainer, resultsContainer){
        
        // gather answer containers from our quiz
        var answerContainers = quizContainer.querySelectorAll('.answers');
        
        // keep track of user's answers
        var userAnswer = '';
        var numCorrect = 0;
        
        // for each question...
        for(var i=0; i<questions.length; i++){
             // find selected answer
            userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']:checked')||{}).value;
            
            // if answer is correct
            if(userAnswer===questions[i].correctAnswer){
                // add to the number of correct answers
                numCorrect++;
                
                // color green
                answerContainers[i].style.color = 'lightgreen';
            }
            // if answer is wrong or blank
            else{
                // color red
                answerContainers[i].style.color = 'red';
            }
        }
         // show number of correct answers out of total
        resultsContainer.innerHTML = numCorrect + ' out of ' + questions.length;
    }
     // show questions
    showQuestions(questions, quizContainer);
    
    // submit, show results
    submitButton.onclick = function(){
        showResults(questions, quizContainer, resultsContainer);
    }
 } 