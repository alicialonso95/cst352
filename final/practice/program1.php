<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css?family=Acme|Work+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <!-- <link href="css/styles.css" rel="stylesheet" type="text/css" /> -->
        
    
    </head>
    <style>
        body {
            
            text-align: center;
            
        }
        .rubric{
            margin: auto;
                  width: 50%;
                  padding: 10px;
        }
    </style>
    <body>
    <div id="container">
        <div class="container-b">
        <div class="nav-container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <!--<a class="navbar-brand" href="index.html"></a>-->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-item nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                 
                 
                 
                </div>
              </div>
            </nav>
        </div>
        
        <div class="jumbotron jumbotron-fluid">
            <h1>Welcome to our page!</h1>
            <h4>Login</h4>
        </div>  
        <div class="login">
            <form action="loginProcess.php" method="post">
                <p>Username: <input type="text" name="username"></p>  
                <p>Password: <input type="password" name="password"></p>
                <input type="submit" id="loginBtn" value="Login" class="btn btn-primary">
            </form>
            </div>
        </div>
    </div> 
</div>    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    </body>
</html>
  <br><br>
  <div class="rubric">
    <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#FFC0C0">
      <td>1</td>
      <td>There is a Login form with all appropriate HTML elements</td>
      <td width="20" align="center">5</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>2</td>
      <td>When changing the username, a jQuery event is executed</td>
      <td width="20" align="center">5</td>
    </tr> 
    <tr style="background-color:#FFC0C0">
      <td>3</td>
      <td>When changing the username, an AJAX call is executed, displaying the last date/time the user logged in and the last login status (Successful, Unsuccessful)</td>
      <td align="center">15</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>4</td>
      <td>When submitting the Login form, the last date/time is updated correctly </td>
      <td align="center">15</td>
    </tr>  
     <tr style="background-color:#FFC0C0">
       <td>5</td>
       <td> When submitting the Login form, the Login Status is updated accordingly, whether it was Successulf (S) or Unsuccessful (U) </td>
       <td align="center">20</td>
     </tr> 
 <tr style="background-color:#FFC0C0">
       <td>6</td>
       <td>When submitting the Login form, if the credentials are wrong, the user is taking back to the login screen. </td>
       <td align="center">5</td>
     </tr> 
      <tr style="background-color:#FFC0C0">
       <td>7</td>
       <td>When submitting the Login form, if the credentials are correct, a "username" session variable is set and it is displayed in a new page called <strong>"welcome.php"</strong> </td>
       <td align="center">10</td>
     </tr> 
      <tr style="background-color:#FFC0C0">
       <td>8</td>
       <td>At least five CSS rules are included</td>
       <td align="center">5</td>
     </tr>           
     <tr style="background-color:#99E999">
      <td>9</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </tbody></table>
  </div>
