<?php
// Inclure les fichiers nécessaires
include('functions.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Afficher la liste des films
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Films</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar">
    <ul class="nav-links">
        <li><a href="/FILM/films">Liste des Films</a></li>
        <li><a href="/FILM/suggerez-un-film">Je suggère!</a></li>
        <li><a href="/FILM/contact">Contact</a></li>
        <li><a href="/FILM/a-propos">À propos</a></li>
    </ul>
</nav>


    <div class="container index-page">
        <h1>Liste des Films</h1>
        <a href="/suggerez-un-film" class="btn-retour" style="background-color: black;">Suggérer un nouveau film</a><br><br>

        <?php
        $films = getFilms();
        if (!empty($films)) {
            foreach ($films as $film) {
                echo "<div class='film-item'>";
                echo "<h2><a href='/film-details/" . $film['id'] . "'>" . $film['titre'] . "</a></h2>";
                echo "<p><strong>Année:</strong> " . $film['annee'] . "</p>";
                echo "<p><strong>Description:</strong> " . $film['description'] . "</p>";
                echo "<img src='" . $film['image_url'] . "' alt='" . $film['titre'] . "'><br>";
                echo "<a href='/FILM/film-details/" . $film['id'] . "' class='btn-retour'>Détails</a>";
                echo "</div><br>";
            }
        } else {
            echo "<p>Aucun film trouvé.</p>";
        }
        ?>
        <p>Pour des critiques externes, visitez <a href="https://www.rottentomatoes.com/" target="_blank">Rotten Tomatoes</a>.</p>
    </div>
</body>
</html>
