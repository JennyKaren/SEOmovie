<?php
// Inclure les fichiers nécessaires
include('functions.php');

// Vérifier si l'id est passé dans l'URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Récupérer les détails du film
    $films = getFilms();
    $filmDetails = null;
    foreach ($films as $film) {
        if ($film['id'] == $id) {
            $filmDetails = $film;
            break;
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($filmDetails['titre']) ? $filmDetails['titre'] : 'Détails du Film'; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
    <ul class="nav-links">
        <li><a href="/FILM/films">Liste des Films</a></li>
        <li><a href="/FILM/suggerez-un-film">Je suggère!</a></li>
        <li><a href="/FILM/contact">Contact</a></li>
        <li><a href="/FILM/a-propos">À propos</a></li>
    </ul>
</nav>


    <div class="container">
        <?php
        if ($filmDetails) {
            echo "<div class='detail-film'>";
            echo "<h1>" . htmlspecialchars($filmDetails['titre']) . "</h1>"; // Titre principal pour SEO
            echo "<h2>Informations du Film</h2>"; // Sous-titre pour la hiérarchie
            echo "<p><strong>Année:</strong> " . htmlspecialchars($filmDetails['annee']) . "</p>";
            echo "<p><strong>Description:</strong> " . htmlspecialchars($filmDetails['description']) . "</p>";
            echo "<img src='" . htmlspecialchars($filmDetails['image_url']) . "' alt='Affiche du film " . htmlspecialchars($filmDetails['titre']) . "'><br>";
            echo "</div>";
        } else {
            echo "<p>Film non trouvé.</p>";
        }
        ?>

        <!-- Liens internes -->
        <a href="/films" class="btn-retour">Retour à la liste</a>
        <a href="/suggerez-un-film" class="btn-suggestion">Suggérer un Film</a>

        <!-- Lien externe vers une base de données cinématographique -->
        <p>Pour en savoir plus sur des films similaires, visitez <a href="https://www.imdb.com/" target="_blank">IMDb</a>.</p>
    </div>
</body>

</html>

<?php
} else {
    echo "<p>ID de film manquant.</p>";
}
?>
