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
            <div class="col-md-8">
                <div class="widget" style="height: 400px">
                    <div id="curve_chart" , style="height: 80%"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> TOTAL SONGS</h3>
                    <div style="text-align:center"><font size="30">104</font></div>
                    <h5 id="list_heading">&#8593 5% from yesterday</h5>
                </div>
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> TOTAL UNIQUE SONGS</h3>
                    <div style="text-align:center"><font size="30">26</font></div>
                    <h5 id="list_heading">&#8595 7% from yesterday</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> TOTAL ALBUMS</h3>
                    <div style="text-align:center"><font size="30">7</font></div>
                    <h5 id="list_heading">&#8595 11% from yesterday</h5>
                </div>
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> TOTAL ARTISTS</h3>
                    <div style="text-align:center"><font size="30">6</font></div>
                    <h5 id="list_heading">&#8593 10% from yesterday</h5>
                </div>
            </div>
            <div class="col-md-3">
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
            <div class="col-md-6">
                <div class="widget" style="height: 400px">
                    <h3 id="list_heading"> SONGS BY GENRE</h3>
                    <canvas id="SongsbyGenre" width="500" height="300">
                    </canvas>
                </div>
            </div>
        </div>
        <?php

        break;
    case "week":
        ?>
        <div class="row">
            <div class="col-md-8">
                <div class="widget" style="height: 400px">
                    <div id="curve_chart" , style="height: 80%"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> TOTAL SONGS</h3>
                    <div style="text-align:center"><font size="30">523</font></div>
                    <h5 id="list_heading">&#8593 2% from last week</h5>
                </div>
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> TOTAL UNIQUE SONGS</h3>
                    <div style="text-align:center"><font size="30">367</font></div>
                    <h5 id="list_heading">&#8595 3% from last week</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> TOTAL ALBUMS</h3>
                    <div style="text-align:center"><font size="30">23</font></div>
                    <h5 id="list_heading">&#8595 12% from last week</h5>
                </div>
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> TOTAL ARTISTS</h3>
                    <div style="text-align:center"><font size="30">20</font></div>
                    <h5 id="list_heading">&#8593 8% from last week</h5>
                </div>
            </div>
            <div class="col-md-3">
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
            <div class="col-md-6">
                <div class="widget" style="height: 400px">
                    <h3 id="list_heading"> SONGS BY GENRE</h3>
                    <canvas id="SongsbyGenre" width="500" height="300">
                    </canvas>
                </div>
            </div>
        </div>
        <?php
        break;
    case "month":
        ?>
        <div class="row">
            <div class="col-md-8">
                <div class="widget" style="height: 400px">
                    <div id="curve_chart" , style="height: 80%"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> TOTAL SONGS</h3>
                    <div style="text-align:center"><font size="30">1682</font></div>
                    <h5 id="list_heading">&#8593 6% from last month</h5>
                </div>
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> TOTAL UNIQUE SONGS</h3>
                    <div style="text-align:center"><font size="30">1254</font></div>
                    <h5 id="list_heading">&#8595 6% from last month</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> TOTAL ALBUMS</h3>
                    <div style="text-align:center"><font size="30">81</font></div>
                    <h5 id="list_heading">&#8595 4% from last month</h5>
                </div>
                <div class="big_stat, widget" style="height: 185px;">
                    <h3 id="list_heading"> TOTAL ARTISTS</h3>
                    <div style="text-align:center"><font size="30">74</font></div>
                    <h5 id="list_heading">&#8593 3% from last month</h5>
                </div>
            </div>
            <div class="col-md-3">
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
            <div class="col-md-6">
                <div class="widget" style="height: 400px">
                    <h3 id="list_heading"> SONGS BY GENRE</h3>
                    <canvas id="SongsbyGenre" width="500" height="300">
                    </canvas>
                </div>
            </div>
        </div>
        <?php
        break;
}
?>