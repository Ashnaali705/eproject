<?php
// session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'stationary';

$conn = mysqli_connect('localhost', 'root', '', 'stationary');

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
