<?php

if (isset($_GET["period"])) {
    $period = $_GET["period"];
} else {
    $period = 'week';
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-2" id="time_selection">
            <div class="btn-group">
                <button class="btn btn-primary status" id = "time_button">Past <?php echo $period ?></button>
                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id = "time_button">
                    <span class="caret" style = "color: rgb(219, 221, 224)"></span>
                </button>
                <ul class="dropdown-menu dropdown-inverse">
                    <li><a href='?period=day' class="dropDownItem" onclick="updatePeriod('day')">PAST DAY</a></li>
                    <li><a href='?period=week' class="dropDownItem" onclick="updatePeriod('week')">PAST WEEK</a></li>
                    <li><a href='?period=month' class="dropDownItem" onclick="updatePeriod('month')">PAST MONTH</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>