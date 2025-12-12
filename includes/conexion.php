<?php
// Configuration
$host = 'host.docker.internal';
$dbname = 'deckbox'; // Assumed default
$username = 'postgres'; // Assumed default
$password = 'postgres'; // Assumed default

try {
    $dsn = "pgsql:host=$host;dbname=$dbname";
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
