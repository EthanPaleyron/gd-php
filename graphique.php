<?php
$one = 0;
$two = 0;
$three = 0;
$four = 0;
$five = 0;
if ($pointeur = opendir("images")) {
    while (false !== ($file = readdir($pointeur))) {
        if ($file != "." && $file != "..") {
            $filesize = filesize("images/" . $file);
            if ($filesize < 50000) {
                $one++;
            } elseif ($filesize < 100000) {
                $two++;
            } elseif ($filesize < 200000) {
                $three++;
            } elseif ($filesize < 500000) {
                $four++;
            } elseif ($filesize >= 1000000) {
                $five++;
            }
        }
    }
    closedir($pointeur);
}

header("Content-type: image/png");
$tableau_visites = array($one, $two, $three, $four, $five);
$largeurImage = 250;
$hauteurImage = 200;
$image = imagecreate($largeurImage, $hauteurImage);
$blanc = imagecolorallocate($image, 255, 255, 255);
$noir = imagecolorallocate($image, 0, 0, 0);
$rouge = imagecolorallocate($image, 255, 0, 0);
imageline(
    $image,
    10,
    $hauteurImage - 10,
    $largeurImage - 10,
    $hauteurImage - 10,
    $noir
);
$array = array("<50ko", "<100ko", "<500ko", "<1Mo", ">=1Mo");
for ($colum = 1; $colum <= 5; $colum++) {
    imagestring($image, 0, $colum * 40 - 10, $hauteurImage - 10, $array[$colum - 1], $noir);
}
imageline($image, 10, 10, 10, $hauteurImage - 10, $noir);
$visites_maximum = max($tableau_visites);

for ($colum = 1; $colum <= 5; $colum++) {
    if ($tableau_visites[$colum - 1] === $visites_maximum) {
        $hauteurRectangle = round(($tableau_visites[$colum - 1] * $hauteurImage) / $visites_maximum - 10);
    } else if ($tableau_visites[$colum - 1] > 0) {
        $hauteurRectangle = round(($tableau_visites[$colum - 1] * $hauteurImage) / $visites_maximum + 10);
    } else {
        $hauteurRectangle = 10;
    }
    imagefilledrectangle($image, $colum * 40 - 6, $hauteurImage -
        $hauteurRectangle, $colum * 40 + 8, $hauteurImage - 10, $rouge);
    imagestring(
        $image,
        0,
        $colum * 40 - 6,
        $hauteurImage - $hauteurRectangle - 10,
        $tableau_visites[$colum - 1],
        $noir
    );
}
imagePng($image);
imagedestroy($image);
?>