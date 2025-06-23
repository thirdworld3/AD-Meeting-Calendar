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

// Enable/disable switch
if ($_ENV['SEED_ENABLED'] !== 'true') {
    echo "Seeder is disabled. Skipping...\n";
    exit;
  }

  // Seed the users table
  echo "Seeding users table...\n";

  $pdo->exec("
    INSERT INTO users (username, email, password, full_name, role, group_name)
    VALUES 
      ('admin', 'admin@example.com', 'adminpass', 'Admin User', 'admin', 'core'),
      ('felipe', 'felipe@example.com', 'felipepass', 'Felipe Jimenez', 'user', 'alpha'),
      ('ian', 'ian@example.com', 'ianpass', 'Ian Ramirez', 'user', 'beta');
  ");

  echo "✅ Users seeded successfully.\n";