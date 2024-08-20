<?php
session_start();

if (isset($_SESSION['name'])) {
    echo 'Accessing session' . $_SESSION['name'] . 'from another page';
} else {
    echo 'No Name Has Been SET';
}
