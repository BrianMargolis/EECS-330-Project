<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include "php/head.php" ?>
    <title>Profile</title>
</head>
<body onload="main()">

<?php include "php/header.php" ?>

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
                <div class="col-md-3">
                    <img src="images/pandora.png" width=300 alt="pandora">
                    <p style="color: white; font-style: italic; opacity: 1">Connected</p>
                </div>

                <div class="col-md-3">
                    <img src="images/soundcloud.png" width=300 style="opacity: .2" alt="soundcloud">
                    <p style="color: white; font-style: italic; opacity: .5">Disconnected (click to connect service)</p>
                </div>

                <div class="col-md-3">
                    <img src="images/spotify.png" width=300 alt="spotify">
                    <p style="color: white; font-style: italic; opacity: 1">Connected</p>
                </div>

                <div class="col-md-3">
                    <img src="images/apple_music.png" width=300 style="opacity: .2" alt="apple music">
                    <p style="color: white; font-style: italic; opacity: .5">Disconnected (click to connect service)</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <img src="images/last_fm.png" width=300 alt="pandora">
                    <p style="color: white; font-style: italic; opacity: 1">Connected</p>
                </div>

                <div class="col-md-3">
                    <img src="images/tidal.png" width=300 style="opacity: .2" alt="apple music">
                    <p style="color: white; font-style: italic; opacity: .5">Disconnected (click to connect service)</p>
                </div>

                <div class="col-md-3">
                    <img src="images/youtube.png" width=300 style="opacity: .2" alt="soundcloud">
                    <p style="color: white; font-style: italic; opacity: .5">Disconnected (click to connect service)</p>
                </div>

            </div>
        </div>
    </div>
</div>
</body>

</html>
