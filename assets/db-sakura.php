<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'sakura';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = new mysqli("$hostname", "$username", "$password", "$database"); 
if ($mysqli->connect_error) {
    exit("Connection failed: " . $mysqli->connect_error);
}
?>

<?php
// Connexion à la base de données MySQL avec PDO
try {
    $pdo = new PDO("mysql:host=localhost;dbname=sakura", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>