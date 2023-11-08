<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Créer une page formulaire.php contenant un input type file et un bouton submit. Créer une page recoit.php qui stocke les images dans le dossier image. Créer une page graphique.php qui affiche des barres verticales représentant le nombre de fichiers < 50ko, < 100 ko, < 500 ko, < 1Mo et >= 1Mo Créer une page affichage.php qui affiche graphique.php -->
    <form action="recoit.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
        <input name="file" type="file">
        <input type="submit" value="Submit">
    </form>
    <a href="affichage.php">Affichage</a>
</body>

</html>