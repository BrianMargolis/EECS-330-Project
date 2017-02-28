<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include "php/head.php"?>
    <title>Sign Up</title>
</head>
<body onload="main()" style = "background-color:rgba(107, 107, 107, 1)">

<div class="container-fluid">
    <div id = "login_box" style="margin-top: 3em">
        <div class = "row">
            <img src="images/Logo_Rough.png" alt="soundscape" style = "margin-left: 6em; margin-top: 2.5em; margin-bottom: 0.5em"/>
        </div>
        <div class = "row">
            <input id = "login_field" type = "text" placeholder="Name" >
            <br>
            <input type = "text" placeholder = "Username" id = "login_field">
            <br>
            <input type = "text" placeholder = "Password" id = "login_field">
            <br>
            <input type = "text" placeholder = "Email" id = "login_field">
            <input type = "text" placeholder = "Birthday" id = "login_field">
            <a href="index.php"><input class="button" id = "login_button" type="submit" value="Sign Up"></a>
            <br>
            <a href="login.php" style="color: rgba(107,107,107,1); margin-left: 20%;">Already a member? Sign in here</a>
            <br>
        </div>
    </div>
</div>
</body>
</html>
