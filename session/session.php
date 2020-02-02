<?php
session_start();

if (!isset($_SESSION['views'])) {
    $_SESSION['views'] = 0;
    echo 'It\'s your first session, please reload the page';
} else {
    $_SESSION['views'] = $_SESSION['views'] + 1;
    echo $_SESSION['views'];
}
