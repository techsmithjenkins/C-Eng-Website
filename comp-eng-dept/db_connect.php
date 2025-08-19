<?php
$host = 'localhost';
$user = 'root';
$pass = '';  // Empty if default; change if you set one
$db = 'comp_eng_db';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>