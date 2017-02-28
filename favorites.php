<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include "php/head.php" ?>
    <title>Music Stats</title>

</head>

<body onload="main()">

<?php include "php/header.php" ?>

<div class="row">
    <?php $active = "favorites"; include "php/sidebar.php" ?>
    <div class="col-md-10" id="main_pane">
        <div class="row">
            <?php include "php/time_selection.php" ?>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="widget">
                    <h3 id="list_heading">TOP 10 SONGS</h3>
                    <ol>
                        <li> ONE DANCE</li>
                        <p>Drake</p>
                        <li> 7 YEARS</li>
                        <p>Lukas Graham</p>
                        <li> CHEAP THRILLS</li>
                        <p>Sia</p>
                        <li> I TOOK A PILL IN IBIZA</li>
                        <p>Mike Posner</p>
                        <li> THIS IS WHAT YOU CAME FOR</li>
                        <p>Calvin Harris Ft. Rihanna</p>
                        <li> LUSH LIFE</li>
                        <p>Zara Larsson</p>
                        <li> CLOSER</li>
                        <p>The Chainsmokers Ft. Halsey</p>
                        <li> LOVE YOURSELF</li>
                        <p>Justin Bieber</p>
                        <li> WORK</li>
                        <p>Rihanna Ft. Drake</p>
                        <li> CAN'T STOP THE FEELING</li>
                        <p>Justin Timberlake</p>
                    </ol>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3 id="list_heading">TOP 10 ALBUMS</h3>
                    <ol>
                        <li> STARBOY</li>
                        <p>The Weeknd</p>
                        <li> I SEE YOU</li>
                        <p>The XXX</p>
                        <li> LA LA LAND</li>
                        <p>Original Motion Picture Soundtrack</p>
                        <li> MOANA</li>
                        <p>Original Motion Picture Soundtrack</p>
                        <li> 24K MAGIC</li>
                        <p>Bruno Mars</p>
                        <li> HAMILTON</li>
                        <p>Original Broadway Cast Recording</p>
                        <li> 4 YOUR EYEZ ONLY</li>
                        <p>J Cole</p>
                        <li> VIEWS</li>
                        <p>Drake</p>
                        <li> STONEY</li>
                        <p>Post Malone</p>
                        <li> TREATS</li>
                        <p>Original Motion Picture Soundtrack</p>
                    </ol>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3 id="list_heading">TOP 10 ARTISTS</h3>
                    <ol>
                        <li> THE WEEKND</li>
                        <p> Illinois, USA </p>
                        <li> ED SHEERAN</li>
                        <p> California, USA </p>
                        <li> THE CHAINSMOKERS</li>
                        <p> Nevada, USA </p>
                        <li> BRUNO MARS</li>
                        <p> Montana, USA </p>
                        <li> DRAKE</li>
                        <p> Illinois, USA </p>
                        <li> TWENTY ONE PILOTS</li>
                        <p> California, USA </p>
                        <li> ARIANA GRANDE</li>
                        <p> New York, USA </p>
                        <li> RIHANNA</li>
                        <p> Texas, USA </p>
                        <li> THE XXX</li>
                        <p> Illinois, USA </p>
                        <li> ADELE</li>
                        <p> Florida, USA </p>
                    </ol>
                </div>
            </div>
        </div>

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
</body>

<?php include "php/favorites_graph_scripts.php" ?>
</html>
