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

<div class="header" id = "header_id">
    <div class="container-fluid">
        <div class = "row">
            <div class = "col-md-2">
                <a href="../index.php"><img src="../images/Logo_Rough.png" alt="soundscape" style = "width: 135px"/></a>
            </div>
            <div class = "col-md-10">
                <ul style = "text-align:right;">
                    <li><a href="../index.php?period=<?php echo $period ?>" <?php isActive('dashboard', $active) ?>>DASHBOARD</a></li>
                    <li><a href="../favorites.php?period=<?php echo $period ?>" <?php isActive('favorites', $active) ?>>FAVORITES</a></li>
                    <li><a href="../listening_habits.php?period=<?php echo $period ?>" <?php isActive('recent_stats', $active) ?>>LISTENING HABITS</a></li>
                    <li><a href="../profile.php?period=<?php echo $period ?>" <?php isActive('profile', $active) ?>>PROFILE</a></li>
                    <li><a href="../login.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>