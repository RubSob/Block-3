<?php
session_start();
require_once('config.php');

if(isset($_POST['Register'])) {
    $user = $_POST['Username'];
    $pass = $_POST['Password'];    
    
        $db->query("INSERT INTO users (username, password) VALUES ('$user', '$pass')");
        echo "Registration successful! <a href='login.php'>Login now</a>";
        exit;
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>
<body>
    <h1>Register New Account</h1>
    <form method="post">
        <input type="text" name="Username" placeholder="Username" required>
        <input type="password" name="Password" placeholder="Password" required>
        <button type="submit" name="Register">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p>
</body>
</html>