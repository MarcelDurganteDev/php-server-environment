<?php
session_start();

$_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
// $_SESSION['time'] = $_SERVER['REQUEST_TIME_FLOAT'];
$_SESSION['time'] = time();

echo '<pre>';
print_r($_SESSION);