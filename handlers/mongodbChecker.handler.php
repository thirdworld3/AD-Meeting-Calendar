<?php
require_once 'envSetter.util.php';

$uri = $_ENV['MONGO_URI'];

try {
    $mongo = new MongoDB\Driver\Manager($uri);

    $command = new MongoDB\Driver\Command(["ping" => 1]);
    $mongo->executeCommand("admin", $command);

    echo "✅ Connected to MongoDB successfully.<br>";
} catch (MongoDB\Driver\Exception\Exception $e) {
    echo "❌ MongoDB connection failed: " . $e->getMessage() . "<br>";
}