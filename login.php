<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include "php/head.php" ?>
    <title>Login</title>
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
            <input type = "text" placeholder = "Password" id = "login_field">
            <br>
            <a href="index.php"><input class="button" id = "login_button" type="submit" value="Sign In"></a>
            <br>
            <br>
            <a href="signup.php" style="color: rgba(107,107,107,1); margin-left: 20%;">Need an account? Sign up here</a>
            <br>
            <a href="forgot_password.php" style="color: rgba(107,107,107,1); margin-left: 30%;" >Forgot password?</a>
        </div>
    </div>
</div>
</body>
</html>
