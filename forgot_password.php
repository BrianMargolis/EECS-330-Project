<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include "php/head.php" ?>
    <title>Password Recovery</title>
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
            <br> or <br>
            <input id="login_field" type="text" placeholder="Email">
            <br>
            <br>
            <a href="login.php"><input class="button" type="submit" style="color: black" value="Submit"></a>
        </div>
    </div>
</div>
</body>
</html>
