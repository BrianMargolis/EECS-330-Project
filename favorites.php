<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include "php/head.php" ?>
    <title>Favorites</title>
</head>

<body onload="main()">

<?php $active = "favorites";
include "php/header.php";
include "php/time_selection.php" ?>

<div class="container-fluid">
    <div class="row">
        <div class = "col-md-1">
        
        </div>
        <div class="col-md-10" id="main_pane">
            <?php include "php/favorites_content.php" ?>

            <div class="row">
                <div class="col-md-6">
                    <div class="widget" style="height: 300px">
                        <h3 id="list_heading"> MUSIC SOURCE</h3>
                        <canvas class="graph" id="MusicSource" style="height: 80%; text-align: center;"></canvas>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="widget" style="height: 300px">
                        <h3 id="list_heading"> SONGS PER DECADE</h3>
                        <canvas class="graph" id="SongsbyDecade" style="height: 80%; text-align: center;"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>

<?php include "php/favorites_graph_scripts.php" ?>
</html>
