<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
    <style type="text/css">
        .title {
            display: inline-block;
            width: 50%;
            text-align: center;
        }
    </style>

    <!--<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>-->
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
            <input id="login_field" type="text" placeholder="Username">
            <br>
            <input id="login_field" type="text" placeholder="Password">
            <br>
            <a href="index.php"><input class="button" type="submit" value="Submit"></a>
        </div>
    </div>
</div>
</body>
</html>
