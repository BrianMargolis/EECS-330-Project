<?php

if (isset($_GET["period"])) {
    $period = $_GET["period"];
} else {
    $period = 'week';
}

function isActive($page, $active)
{
    if ($active == $page) {
        echo "class = active";
    }
}

?>
<div class="container-fluid">
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2" id="accountInfo">
                    <a href="../profile.php">
                        <img src="../images/user_pic.png" alt="User Pic" width="80">
                        <br>
                        JEFFY
                    </a>
                </div>

                <div class="col-md-8">
                    <a href="../index.php"><img src="../images/Logo_Rough.png" alt="soundscape"/></a>
                </div>

                <div class="col-md-2">
                    <a href="../login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <div class="sidebar">
        <div class="row">
            <div class="col-md-4 side_link">
                <a href="../index.php?period=<?php echo $period ?>" <?php isActive('dashboard', $active) ?>>Dashboard</a>
            </div>
            <div class="col-md-4 side_link">
                <a href="../favorites.php?period=<?php echo $period ?>" <?php isActive('favorites', $active) ?>>Favorites</a>
            </div>
            <div class="col-md-4 side_link">
                <a href="../recent_stats.php?period=<?php echo $period ?>" <?php isActive('recent_stats', $active) ?>>Recent
                    Stats</a>
            </div>
        </div>
        <div class="row">
            <?php include "time_selection.php" ?>
        </div>
    </div>
</div>