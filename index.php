<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// MongoDB check
try {
    $mongo = new MongoDB\Driver\Manager("mongodb://host.docker.internal:27111");
    echo "✅ Connected to MongoDB successfully.<br>";
} catch (MongoDB\Driver\Exception\Exception $e) {
    echo "❌ MongoDB connection failed: " . $e->getMessage() . "<br>";
}

// PostgreSQL check
$host = "host.docker.internal";
$port = "5112";
$dbname = "mydatabase";
$user = "user";
$password = "password";

$connStr = "host=$host port=$port dbname=$dbname user=$user password=$password";
$conn = pg_connect($connStr);

if ($conn) {
    echo "✅ PostgreSQL Connection<br>";
} else {
    echo "❌ Connection Failed: " . pg_last_error();
}