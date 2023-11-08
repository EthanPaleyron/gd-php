<?php
if ((isset($_FILES['file']['name']) && ($_FILES['file']['error'] == UPLOAD_ERR_OK))) {
    move_uploaded_file($_FILES['file']['tmp_name'], "images/" . $_FILES['file']["name"]);
    header("Location: http://localhost/images-php/affichage.php");
} else {
    echo "Le fichier n'a pas pu être copié dans le répertoire fichiers.";
    echo ("<a href='formulaire.php'>formulaire.php</a>");
}
?>