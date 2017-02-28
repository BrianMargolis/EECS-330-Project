<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include "php/head.php" ?>
    <title>Soundscape</title>
</head>

<body>

<?php $active = "dashboard";
include "php/header.php";
include "php/time_selection.php"?>


<div class="container-fluid">
    <div class="row">
    	<div class = "col-md-1">
    	
    	</div>
        <div class="col-md-10" id="main_pane">

            <?php include "php/dashboard_content.php"?>
        </div>
    </div>
</div>
</body>

<?php include "php/dashboard_graph_scripts.php" ?>

</html>
