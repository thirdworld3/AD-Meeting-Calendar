CREATE TABLE IF NOT EXISTS tasks (
    id SERIAL PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT,
    due_date DATE,
    status VARCHAR(50) DEFAULT 'pending',
    assigned_to INTEGER REFERENCES users(id),
    project_id INTEGER REFERENCES projects(id),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
echo "Applying schema from database/tasks.model.sql…\n";
$sql = file_get_contents('database/tasks.model.sql');
if ($sql === false) {
  throw new RuntimeException("Could not read database/tasks.model.sql");
} else {
  echo "Creation Success from the database/tasks.model.sql\n";
}
$pdo->exec($sql);