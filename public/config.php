<?php
$db = new mysqli('localhost', 'root', 'pass', 'login');

if($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
