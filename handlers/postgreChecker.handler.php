<?php
require_once 'envSetter.util.php';

$host = $_ENV['PG_HOST'];
$port = $_ENV['PG_PORT'];
$dbname = $_ENV['PG_DB'];
$user = $_ENV['PG_USER'];
$password = $_ENV['PG_PASS'];

$connStr = "host=$host port=$port dbname=$dbname user=$user password=$password";
$conn = pg_connect($connStr);

if ($conn) {
    echo "✅ PostgreSQL Connection<br>";
} else {
    echo "❌ Connection Failed: " . pg_last_error();
}
