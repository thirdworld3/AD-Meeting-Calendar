<?php
declare(strict_types=1);

// 1) Composer autoload
require 'vendor/autoload.php';

// 2) Composer bootstrap
require 'bootstrap.php';

// 3) envSetter
require_once __DIR__ . '/envSetter.util.php';

// ——— Connect to PostgreSQL ———
$dsn = "pgsql:host={$_ENV['PG_HOST']};port={$_ENV['PG_PORT']};dbname={$_ENV['PG_DB']}";
$pdo = new PDO($dsn, $_ENV['PG_USER'], $_ENV['PG_PASS'], [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);

// USERS
echo "Applying schema from database/users.model.sql…\n";
$sql = file_get_contents('database/users.model.sql');
if ($sql === false) {
  throw new RuntimeException("Could not read database/users.model.sql");
} else {
  echo "Creation Success from the database/users.model.sql\n";
}
$pdo->exec($sql);

// PROJECTS
echo "Applying schema from database/projects.model.sql…\n";
$sql = file_get_contents('database/projects.model.sql');
if ($sql === false) {
  throw new RuntimeException("Could not read database/projects.model.sql");
} else {
  echo "Creation Success from the database/projects.model.sql\n";
}
$pdo->exec($sql);

// PROJECT_USERS
echo "Applying schema from database/project_users.model.sql…\n";
$sql = file_get_contents('database/project_users.model.sql');
if ($sql === false) {
  throw new RuntimeException("Could not read database/project_users.model.sql");
} else {
  echo "Creation Success from the database/project_users.model.sql\n";
}
$pdo->exec($sql);

// TASKS
echo "Applying schema from database/tasks.model.sql…\n";
$sql = file_get_contents('database/tasks.model.sql');
if ($sql === false) {
  throw new RuntimeException("Could not read database/tasks.model.sql");
} else {
  echo "Creation Success from the database/tasks.model.sql\n";
}
$pdo->exec($sql);

echo "Truncating tables…\n";
foreach (['project_users', 'tasks', 'projects', 'users'] as $table) {
  $pdo->exec("TRUNCATE TABLE {$table} RESTART IDENTITY CASCADE;");
}
// (You can now repeat for the other model files)