<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include "php/head.php" ?>
    <title>Login</title>
</head>
<body onload="main()">

<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="index.php"><img src="images/Logo_Rough.png" alt="soundscape"/></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 login" id="main_pane">
            <input id="login_field" type="text" style="color: black" placeholder="Username">
            <br>
            <input id="login_field" type="text" style="color: black" placeholder="Password">
            <br>
            <br>
            <a href="index.php"><input class="button" type="submit" style="color: black" value="Submit"></a>
            <br>
            <br>
            <a href="signup.php"><input class="button" type="submit" style="color: black" value="Sign Up"></a>
            <br>
            <a href="forgot_password.php"><input class="button" type="submit" style="color: black"
                                                 value="Forgot Password"></a>
        </div>
    </div>
</div>
</body>
</html>
