<?php
// $image = imagecreate(300, 150);
// $couleur_fond = imagecolorallocate($image, 0, 255, 0);
// imagepng($image, "source/image1.png");

// header("Content-type: image/jpeg");
// $image = imagecreatefromjpeg("d-éléphant-volant.jpg");
// imagejpeg($image);
// imagedestroy($image);

// header("Content-type: image/png");
// $image = imagecreate(300, 150);
// $couleur_fond = imagecolorallocate($image, 110, 210, 220); //bleu clair
// $noir = imagecolorallocate($image, 0, 0, 0);
// imagestringup($image, 3, 50, 120, "Voici mon texte.", $noir);
// imagecolortransparent($image, $couleur_fond);
// imagepng($image);
// imagedestroy($image);

// $image_source = imagecreatefromjpeg("d-éléphant-volant.jpg"); // La source est l'image
// $destination = imagecreatetruecolor(102, 77); // Création de la miniature
// $largeur_source = imagesx($image_source); // retourne la largeur de l'image
// $hauteur_source = imagesy($image_source); // retourne la hauteur de la
// $largeur_destination = 102;
// $hauteur_destination = 77;
// // Création de la miniature
// imagecopyresampled(
//     $destination,
//     $image_source,
//     0,
//     0,
//     0,
//     0,
//     $largeur_destination,
//     $hauteur_destination,
//     $largeur_source,
//     $hauteur_source
// );
// // Enregistrement de la miniature sous le nom "mini_Koala.jpg"
// imagejpeg($destination, 'd-éléphant-volant.jpg');
// echo "Affichage de la miniature: <img src='d-éléphant-volant.jpg' name='miniature'
// />";
// imagedestroy($image_source);
// header("Content-type: image/jpeg");
// // Création des deux images en tant qu'objet
// $source = imagecreatefrompng("source/image1.png"); // Le computer est la source
// $destination = imagecreatefromjpeg("d-éléphant-volant.jpg"); // Le Koala est la
// $largeur_source = imagesx($source); //largeur de l'image source
// $hauteur_source = imagesy($source); //hauteur de l'image source
// $largeur_destination = imagesx($destination); //largeur de l'image
// $hauteur_destination = imagesy($destination); //hauteur de l'image
// // Placement du logo en bas à gauche
// $x = 0;
// $y = $hauteur_destination - $hauteur_source;
// // Placement de l'image source dans l'image de destination
// imagecopymerge(
//     $destination,
//     $source,
//     $x,
//     $y,
//     0,
//     0,
//     $largeur_source,
//     $hauteur_source,
//     65
// );
// // Affichage de l'image finale
// imagejpeg($destination);
// imagedestroy($destination);
// header("Content-type: image/png");
// $ressource = imagecreate(300, 150);
// $blanc = imagecolorallocate($ressource, 255, 255, 255);
// $noir = imagecolorallocate($ressource, 0, 0, 0);
// //tableau de 3 points avec leur coordonnée x et y
// $tableau_points = array(20, 30, 160, 70, 110, 150);
// //création du polygone de 3 points en noir.
// imagepolygon($ressource, $tableau_points, 3, $noir);
// //affiche l'image
// imagepng($ressource);
// imagedestroy($ressource);

// header("Content-type: image/png");
// $tableau_visites = array(520, 458, 642, 741, 254, 657, 356, 912, 259, 712);
// $largeurImage = 450;
// $hauteurImage = 400;
// $image = imagecreate($largeurImage, $hauteurImage);
// $blanc = imagecolorallocate($image, 255, 255, 255);
// $noir = imagecolorallocate($image, 0, 0, 0);
// $rouge = imagecolorallocate($image, 255, 0, 0);
// // trait horizontal pour représenter l'axe des jours
// imageline(
//     $image,
//     10,
//     $hauteurImage - 10,
//     $largeurImage - 10,
//     $hauteurImage - 10,
//     $noir
// );
// // Affichage du numéro des jours
// for ($jour = 1; $jour <= 10; $jour++) {
//     imagestring($image, 0, $jour * 40, $hauteurImage - 10, $jour, $noir);
// }
// // trait vertical représentant le nombre de visites
// imageline($image, 10, 10, 10, $hauteurImage - 10, $noir);
// // le nombre maximum de visites proportionnel à la hauteur de l'image
// $visites_maximum = 1000;
// // tracé des rectangles
// for ($jour = 1; $jour <= 10; $jour++) {

//     $hauteurRectangle = round(($tableau_visites[$jour -
//         1] * $hauteurImage) / $visites_maximum);

//     imagefilledrectangle($image, $jour * 40 - 6, $hauteurImage -
//         $hauteurRectangle, $jour * 40 + 8, $hauteurImage - 10, $rouge);
//     imagestring(
//         $image,
//         0,
//         $jour * 40 - 6,
//         $hauteurImage - $hauteurRectangle - 10,
//         $tableau_visites[$jour - 1],
//         $noir
//     );
// }
// imagePng($image);
// imagedestroy($image);
?>