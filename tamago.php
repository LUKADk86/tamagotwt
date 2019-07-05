<?php

$monfichier1 = fopen('image.txt', 'r+');

$tab = explode(" ", fgets($monfichier1));
$largeur = intval($tab[0]);
$hauteur= intval($tab[1]);
$array=[];
fgets($monfichier1);
$compteur=intval($tab[2]);;
if(($_POST)AND($compteur<3)){
  intval($compteur);
  $compteur++;
  $largeur=$largeur+10;
  $hauteur=$hauteur+10;

  $array = array(strval($largeur),strval($hauteur),strval($compteur));
  $newvalue = implode(" ", $array);
  fseek($monfichier1, 0);
  fputs($monfichier1, $newvalue);
}else {

  $largeur=200;
  $hauteur=150;
  $compteur=0;
  $monfichier1 = fopen('image.txt', 'r+');
  fseek($monfichier1, 0);
  fputs($monfichier1, "200 150 0");
}
fclose($monfichier1);
$source = imagecreatefrompng("monstre.png"); // La photo est la source
$destination = imagecreatetruecolor($largeur, $hauteur); // On crée la miniature vide

// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$largeur_destination = imagesx($destination);
$hauteur_destination = imagesy($destination);
// On crée la miniature
imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);

// On enregistre la miniature sous le nom "mini_couchersoleil.jpg"


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="tamago.css" rel="stylesheet">
    <title>TAMAGOTWEET</title>
  </head>
  <header>
    <h1>TAMAGOTWEET</h1>
  </header>
  <body>
    <div class="container">
        <form action="tamago.php"  method="post">
          <input class="tweet" type="text" name="tweet" maxlength="140" required><br>
          <?php
          imagepng($destination, "mini-monstre.png");
          intval($compteur);
          require_once('mot.php');
           ?>
           <img src="mini-monstre.png" />

          <input type="submit">
        </form>


    </div>
  </body>
</html>
