<?php

if ($_POST['action'] == 'day' or 'week' or 'month') {
    $_SESSION['period'] = $_POST['action'];
    echo $_POST['action'];
}
