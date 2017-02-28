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

        <?php include "php/recent_stats_content.php" ?>
    </div>

</div>
</body>

<?php include "php/recent_stats_graph_scripts.php" ?>

</html>
