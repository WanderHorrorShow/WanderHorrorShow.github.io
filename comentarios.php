


<?php
// Conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$dbname = "WanderHorrorShow";
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
$pdo = new PDO($dsn, $user, $password);

// Obtener comentarios de la base de datos
$stmt = $pdo->query("SELECT * FROM comentarios ORDER BY fecha DESC");

// Mostrar comentarios en la página
while ($comentario = $stmt->fetch()) {
  echo "<div>";
  echo "<h3>{$comentario['nombre']}</h3>";
  echo "<p>{$comentario['comentario']}</p>";
  echo "<small>{$comentario['fecha']}</small>";
  echo "</div>";
}
?>