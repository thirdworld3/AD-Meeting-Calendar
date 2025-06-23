CREATE TABLE IF NOT EXISTS project_users (
    project_id INTEGER NOT NULL REFERENCES projects (id),
    user_id INTEGER NOT NULL REFERENCES users (id),
    role VARCHAR(50) NOT NULL,
    PRIMARY KEY (project_id, user_id)
);
echo "Applying schema from database/project_users.model.sql…\n";
$sql = file_get_contents('database/project_users.model.sql');
if ($sql === false) {
  throw new RuntimeException("Could not read database/project_users.model.sql");
} else {
  echo "Creation Success from the database/project_users.model.sql\n";
}
$pdo->exec($sql);