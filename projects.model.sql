CREATE TABLE IF NOT EXISTS projects (
    id SERIAL PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    description TEXT,
    start_date DATE,
    end_date DATE
);
echo "Applying schema from database/projects.model.sql…\n";
$sql = file_get_contents('database/projects.model.sql');
if ($sql === false) {
  throw new RuntimeException("Could not read database/projects.model.sql");
} else {
  echo "Creation Success from the database/projects.model.sql\n";
}
$pdo->exec($sql);