<?php
session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>
<body>
    <h1>Welcome</h1>    
    
        <p>This is my homepage.</p>
    
    <nav>
        <a href="index.php">Home</a> |
        <a href="about.php">About</a> |
        <a href="contacts.php">Contact</a>
    </nav><br><br>
    
            <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
                <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
            </form>
        
</body>
</html>