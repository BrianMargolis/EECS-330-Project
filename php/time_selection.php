<?php

if (isset($_GET["period"])) {
    $period = $_GET["period"];
} else {
    $period = 'week';
}
?>


<div class="col-md-12" id="time_selection">
    <div class="btn-group">
        <button class="btn btn-primary status">Past <?php echo $period ?></button>
        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu dropdown-inverse">
            <li><a href='?period=day' onclick="updatePeriod('day')">Past day</a></li>
            <li><a href='?period=week' onclick="updatePeriod('week')">Past week</a></li>
            <li><a href='?period=month' onclick="updatePeriod('month')">Past month</a></li>
        </ul>
    </div>
</div>