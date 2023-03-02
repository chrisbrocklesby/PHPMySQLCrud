<?php
$host = 'db';
$user = 'user';
$pass = 'password';

$connection = new mysqli($host, $user, $pass);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
?>
