<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include "php/head.php" ?>
    <title>Profile</title>
</head>
<body onload="main()">

<?php $active = "profile"; 
include "php/header.php" ?>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-12" id="login_box" style="color: white; background-color: rgba(147,147,147,1); padding-top: 2em; padding-left: 3em; margin-left: 35%; margin-top: 4em;">
            <h1 style="text-align: center; font-size: 30px; margin-left: -12px">JEFFY CLARK</h1>
            <br>
            <br>
            Email: jeffyclark@u.northwestern.edu
            <br>
            <br>
            Birthday: 06/03/1997
            <br>
            <br>
            Connected music sources:
            <br>
            <br>
            <div class="row">
                    <div class="col-md-2"></div>
                    <img src="images/pandora.png" width=50 alt="pandora" style="margin-left: 10px">
                    <img src="images/spotify.png" width=50 alt="spotify" style="margin-left: 10px">
                    <img src="images/last_fm.png" width=50 alt="pandora" style="margin-left: 10px">

            </div>
        </div>
    </div>
</div>
</body>

</html>
