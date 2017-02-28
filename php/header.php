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

<div class="header">
    <div class="container-fluid">
        <div class = "row">
            <div class = "col-md-2">
                <a href="../index.php"><img src="../images/Logo_Rough.png" alt="soundscape"/></a>
            </div>
            <div class = "col-md-10">
                <ul>
                    <li><a href="../index.php?period=<?php echo $period ?>" <?php isActive('dashboard', $active) ?>>DASHBOARD</a></li>
                    <li><a href="../favorites.php?period=<?php echo $period ?>" <?php isActive('favorites', $active) ?>>FAVORITES</a></li>
                    <li><a href="../recent_stats.php?period=<?php echo $period ?>" <?php isActive('recent_stats', $active) ?>>Recent Stats</a></li>
                </ul>
            </div>
        </div>



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