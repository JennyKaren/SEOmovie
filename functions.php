<?php
// functions.php

// Inclure la connexion à la base de données
include('db.php');

// Fonction pour afficher tous les films
function getFilms() {
    global $conn; // Accède à la connexion définie dans db.php

    $sql = "SELECT * FROM films";
    $result = $conn->query($sql);

    // Vérifier si des films sont trouvés
    if ($result->num_rows > 0) {
        $films = [];
        while($row = $result->fetch_assoc()) {
            $films[] = $row;
        }
        return $films; // Retourne les films trouvés
    } else {
        return []; // Retourne un tableau vide si aucun film n'est trouvé
    }
}

// Fonction pour insérer un film dans la base de données
function insertFilm($titre, $annee, $description, $image_url) {
    global $conn;

    // Préparer et lier
    $stmt = $conn->prepare("INSERT INTO films (titre, annee, description, image_url) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("siss", $titre, $annee, $description, $image_url);

    // Exécuter la requête
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}
?>
