<!DOCTYPE html>
<html>
    <head>
        <style>
            h1,body{
                text-align:center;
                background-color: #9ecfff;
            }
        </style>
        <title> Admin Login</title>
    </head>
    <body>
        <h1> Admin Login </h1>
        
        <form action="loginProcess.php" method="post">
            
            Username: <input type="text" name="username"/><br>
            Password: <input type="password" name="password"/>
            <br>
            <input type="submit" name="Login" value="Login"/>
            
            
            
        </form>
    </body>
</html>