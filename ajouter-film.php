<?php
// ajoute-film.php

// Inclure les fichiers nécessaires
include('functions.php');

// Vérifier si les données ont été envoyées via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $titre = $_POST['titre'];
    $annee = $_POST['annee'];
    $description = $_POST['description'];
    $image_url = $_POST['image_url'];

    // Appeler la fonction pour insérer le film
    if (insertFilm($titre, $annee, $description, $image_url)) {
        echo "Film ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du film.";
    }

    // Redirection vers la page principale après l'ajout
    header("Location: index.php");
    exit();
} else {
    // Redirection si le formulaire n'est pas soumis correctement
    echo "Données invalides.";
}
?>
