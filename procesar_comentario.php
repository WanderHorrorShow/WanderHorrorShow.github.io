<?php
// Conexión a la base de datos
$host = "localhost";
$user = "id19847497_wanders";
$password = "Su2=G5-aQ26d&o(&";
$dbname = "id19847497_wander";
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
$pdo = new PDO($dsn, $user, $password);

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];

// Insertar comentario en la base de datos
$stmt = $pdo->prepare("INSERT INTO comentarios (nombre, comentario) VALUES (?, ?)");
$stmt->execute([$nombre, $comentario]);

// Redirigir al usuario de vuelta a la página de comentarios
header("Location: comentarios.php");
exit();
?>
