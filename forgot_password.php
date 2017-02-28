<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include "php/head.php" ?>
    <title>Password Recovery</title>
</head>

<body onload="main()" style = "background-color:rgba(107, 107, 107, 1)">

<div class="container-fluid">
    <div id = "login_box" >
        <div class = "row">
            <img src="images/Logo_Rough.png" alt="soundscape" style = "margin-left: 6em; margin-top: 2.5em; margin-bottom: 0.5em"/>
        </div>
        <div class = "row">
            <input id = "login_field" type = "text" placeholder="Username" >
            <br>
            <input type = "text" placeholder = "Email" id = "login_field">
            <br>
            <a href="login.php"><input class="button" id = "login_button" type="submit" value="Request new password" style="margin-left: 25%"></a>
            <br>
            <br>
            <a href="login.php" style="color: rgba(107,107,107,1); margin-left: 20%;">Remember password? Login here</a>
            <br>
            <a href="signup.php" style="color: rgba(107,107,107,1); margin-left: 25%;" >New member? Sign up here</a>
        </div>
    </div>
</div>
</body>
</html>
