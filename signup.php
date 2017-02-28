<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Music Stats</title>

    <link href="frameworks/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="frameworks/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" media="screen"/>

    <script src="frameworks/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="frameworks/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/control.js" type="text/javascript"></script>

    <link href="css/style_1.css" rel="stylesheet" type="text/css" media="screen"/>

    <!--<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>-->
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
            <a href="login.php"><input class="button" id = "login_button" type="submit" value="Sign Up"></a>
            <br>
            <a href="login.php" style="color: rgba(107,107,107,1); margin-left: 20%;">Already a member? Sign in here</a>
            <br>
        </div>
    </div>
</div>
</body>
</html>
