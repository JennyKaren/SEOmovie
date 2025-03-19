<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suggérer un Film</title>
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
        <h1>Suggérer un Film</h1>
        <form method="POST" action="/ajouter-film" class="create-film">
            <label for="titre"><h2>Titre :</h2></label>
            <input type="text" id="titre" name="titre" required><br><br>

            <label for="annee"><h2>Année :</h2></label>
            <input type="number" id="annee" name="annee" required><br><br>

            <label for="description"><h2>Description :</h2></label>
            <textarea id="description" name="description" required></textarea><br><br>

            <label for="image_url"><h2>URL de l'image :</h2></label>
            <select id="image_url" name="image_url" required>
                <option value="assets/default.jpg">Image par défaut</option>
            </select><br><br>

            <input type="submit" value="Ajouter">
        </form>
        <p>Besoin d'inspiration ? Consultez ce guide sur <a href="https://www.wikihow.com/Write-a-Script" target="_blank">comment écrire un script</a>.</p>
    </div>
</body>
</html>
