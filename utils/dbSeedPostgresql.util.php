<?php
declare(strict_types=1);

require 'vendor/autoload.php';
require 'bootstrap.php';
require_once __DIR__ . '/envSetter.util.php';

// Connect to PostgreSQL
$dsn = "pgsql:host={$_ENV['PG_HOST']};port={$_ENV['PG_PORT']};dbname={$_ENV['PG_DB']}";
$pdo = new PDO($dsn, $_ENV['PG_USER'], $_ENV['PG_PASS'], [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);