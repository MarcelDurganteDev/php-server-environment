<?php

$username = "Marcel";
$password = "2021";

session_start();

if (isset($_SESSION['username']) && $_SESSION['password']) {
    $url = "panel.php";
    header("Location: " . $url);
} else {
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $url = "panel.php";
        header('Location: ' . $url);
    } else {
        header('Location: index.php');
    }
}
