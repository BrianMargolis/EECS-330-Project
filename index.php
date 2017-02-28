<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include "php/head.php" ?>
    <title>Soundscape</title>
</head>

<body>

<?php $active = "dashboard";
include "php/header.php" ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" id="main_pane">

            <div class="row">
                <div class="col-md-7">
                    <div class="widget" style="height: 300px;">
                        <div id="curve_chart" style="width: 80%; height: 100%;">
                        </div>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="widget" style="height: 300px">
                        <h3 id="list_heading"> MUSIC SOURCE</h3>
                        <canvas id="MusicSource"
                                style="height: 200px; width: 90%; padding-bottom: 0px;">
                        </canvas>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class=" big_stat, widget" style="height: 185px;">
                        <h3 id="list_heading"> MINUTES LISTENED</h3>
                        <div style="text-align:center"><font size="30">467</font></div>
                        <h5 id="list_heading"> &#8593 16% from last week</h5>
                    </div>
                    <div class="big_stat, widget" style="height: 185px;">
                        <h3 id="list_heading"> TOTAL SONGS</h3>
                        <div style="text-align:center"><font size="30">394</font></div>
                        <h5 id="list_heading">&#8595 6% from last week</h5>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="widget" style="height: 400px">
                        <h3 id="list_heading"> SONGS BY GENRE</h3>
                        <canvas id="SongsbyGenre" width="500" height="300"></canvas>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
</body>

<?php include "php/dashboard_graph_scripts.php" ?>

</html>
