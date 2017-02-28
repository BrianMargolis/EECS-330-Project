<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include "php/head.php" ?>
    <title>Recent Stats</title>
</head>

<body>

<?php include "php/header.php" ?>

<div class="row">
    <?php $active = "recent_stats";
    include "php/sidebar.php" ?>

    <div class="col-md-10" id="main_pane">
        <div class="row">
            <?php include "php/time_selection.php" ?>

        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="widget" style="height: 400px">
                    <div id="curve_chart" , style="height: 80%"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> TOTAL SONGS</h3>
                    <div style="text-align:center"><font size="30">394</font></div>
                    <h5 id="list_heading">&#8593 2% from last week</h5>
                </div>
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> TOTAL UNIQUE SONGS</h3>
                    <div style="text-align:center"><font size="30">100</font></div>
                    <h5 id="list_heading">&#8595 7% from last week</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> TOTAL ALBUMS</h3>
                    <div style="text-align:center"><font size="30">394</font></div>
                    <h5 id="list_heading">&#8595 11% from last week</h5>
                </div>
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> TOTAL ARTISTS</h3>
                    <div style="text-align:center"><font size="30">100</font></div>
                    <h5 id="list_heading">&#8593 10% from last week</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> MINUTES LISTENED</h3>
                    <div style="text-align:center"><font size="30">394</font></div>
                    <h5 id="list_heading">&#8593 20% from last week</h5>
                </div>
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> PERCENT ON PHONE</h3>
                    <div style="text-align:center"><font size="30">80%</font></div>
                    <h5 id="list_heading">&#8593 15% from last week</h5>
                </div>
            </div>
            <div class="col-md-6">
                <div class="widget" style="height: 400px">
                    <h3 id="list_heading"> SONGS BY GENRE</h3>
                    <canvas id="SongsbyGenre" width="500" height="300">
                    </canvas>
                </div>
            </div>
        </div>
    </div>

</div>
</body>

<?php include "php/recent_stats_graph_scripts.php" ?>

</html>
