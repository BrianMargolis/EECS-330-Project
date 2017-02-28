<?php

if (isset($_GET["period"])) {
    $period = $_GET["period"];
} else {
    $period = 'week';
}

switch ($period) {
    case "day":
        ?>
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
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> MINUTES LISTENED</h3>
                    <div style="text-align:center"><font size="30">394</font></div>
                    <h5 id="list_heading">&#8593 20% from yesterday</h5>
                </div>
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> PERCENT ON PHONE</h3>
                    <div style="text-align:center"><font size="30">80%</font></div>
                    <h5 id="list_heading">&#8593 15% from yesterday</h5>
                </div>

            </div>
            <div class="col-md-8">
                <div class="widget" style="height: 400px">
                    <h3 id="list_heading"> SONGS BY GENRE</h3>
                    <canvas id="SongsbyGenre" width="500" height="300"></canvas>
                </div>

            </div>

        </div>
        <?php

        break;
    case "week":
        ?>
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
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> MINUTES LISTENED</h3>
                    <div style="text-align:center"><font size="30">2684</font></div>
                    <h5 id="list_heading">&#8593 10% from last week</h5>
                </div>
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> PERCENT ON PHONE</h3>
                    <div style="text-align:center"><font size="30">70%</font></div>
                    <h5 id="list_heading">&#8593 18% from last week</h5>
                </div>

            </div>
            <div class="col-md-8">
                <div class="widget" style="height: 400px">
                    <h3 id="list_heading"> SONGS BY GENRE</h3>
                    <canvas id="SongsbyGenre" width="500" height="300"></canvas>
                </div>

            </div>

        </div>
        <?php
        break;
    case "month":
        ?>
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
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> MINUTES LISTENED</h3>
                    <div style="text-align:center"><font size="30">8234</font></div>
                    <h5 id="list_heading">&#8593 9% from last month</h5>
                </div>
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> PERCENT ON PHONE</h3>
                    <div style="text-align:center"><font size="30">73%</font></div>
                    <h5 id="list_heading">&#8593 12% from last month</h5>
                </div>

            </div>
            <div class="col-md-8">
                <div class="widget" style="height: 400px">
                    <h3 id="list_heading"> SONGS BY GENRE</h3>
                    <canvas id="SongsbyGenre" width="500" height="300"></canvas>
                </div>

            </div>

        </div>
        <?php
        break;
}
?>