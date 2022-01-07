<?php

session_start();

$username = $_SESSION['username'];
$url = "panel.php?username=" . $username;

echo "Hello $username !";
echo "<br><br>";
echo "You are in the <b>Panel User Page</b>";
echo "<br><br>";
echo "Wanna logout?";
echo "<br><br>";
echo "<a href='close_session.php'>Yes, log me out.</a>?";

?>