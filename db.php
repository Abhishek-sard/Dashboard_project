<?php
$host = 'localhost'; // or your host
$username = 'root'; // your database username
$password = ''; // your database password
$dbname = 'dashboard_project';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
