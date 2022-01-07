<!-- "index.php" : this will be the login page with user and password fields and a login button. This fields must be in a form pointing its action to the validation script. In case you log in or are already logged in, you must be automatically redirected to the panel. -->
<?php

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    // echo $username; 
    $url = ""

}

?>

<html>

<head>
    <title>Login App PHP</title>
</head>

<body>
    <form method="post" action="index.php">
        <input type="" name="username" placeholder="What is your name?">
        <input type="submit" value="Save">
    </form>
</body>

</html>