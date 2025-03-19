<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root"; 
$password = "test";
$dbname = "film_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer l'ID du film depuis l'URL
$film_id = $_GET['id'];

// Récupérer les détails du film
$sql = "SELECT * FROM films WHERE id = $film_id";
$result = $conn->query($sql);
$film = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Film</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo $film['titre']; ?> (<?php echo $film['annee']; ?>)</h1>
    <img src="<?php echo $film['image_url']; ?>" alt="<?php echo $film['titre']; ?>" width="300">
    <h2>Description</h2>
    <p><?php echo $film['description']; ?></p>
</body>
</html>

<?php
$conn->close();
?>