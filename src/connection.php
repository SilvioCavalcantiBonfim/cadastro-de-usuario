<?php
// Connect to the database (using MySQLi)
$host = getenv('DB_HOST');
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');
$dbName = getenv('DB_NAME');

// Create connection
$connection = new mysqli($host, $dbUser, $dbPassword, $dbName);
?>