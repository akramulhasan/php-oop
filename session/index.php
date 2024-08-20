<?php
session_start();

$_SESSION['name'] = 'Akram';

if (isset($_SESSION['name'])) {
    echo 'Hello ' . $_SESSION['name'];
} else {
    echo 'No name set';
}
