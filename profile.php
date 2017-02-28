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

        <div class="col-md-12" id="main_pane" style="color: white">
            Name: Jeffy Clurk
            <br>
            <br>
            Email: jeffyclurk@u.northwestern.edu
            <br>
            <br>
            Birthday: 06/03/1997
            <br>
            <br>
            Connected music sources:
            <br>
            <br>
            <div class="row">
                    <img src="images/pandora.png" width=50 alt="pandora" style="margin-left: 10px">
                    <img src="images/spotify.png" width=50 alt="spotify" style="margin-left: 10px">
                    <img src="images/last_fm.png" width=50 alt="pandora" style="margin-left: 10px">

            </div>
        </div>
    </div>
</div>
</body>

</html>
