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


<div class="sidebar">
    <div class="col-md-2 side_link">
        <a href="../index.php?period=<?php echo $period ?>" <?php isActive('dashboard', $active) ?>>Dashboard</a>
        <a href="../favorites.php?period=<?php echo $period ?>" <?php isActive('favorites', $active) ?>>Favorites</a>
        <a href="../recent_stats.php?period=<?php echo $period ?>" <?php isActive('recent_stats', $active) ?>>Recent Stats</a>
    </div>
</div>