<?php
// db.php

$servername = "localhost";
$username = "root"; 
$password = "test";
$dbname = "film_db";        

// Crée une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifie la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}

// Définir le jeu de caractères pour éviter les problèmes d'encodage
$conn->set_charset("utf8");
?>
