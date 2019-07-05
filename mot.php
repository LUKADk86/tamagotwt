<?php



 $letweet=$_POST['tweet'];
$mots = explode(" ", $letweet);

$fichier= fopen('mots.txt', 'r+');
$lu = fgets($fichier);
fputs($fichier, $mots[0].' ');
 fgets($fichier);
fclose($fichier);
/*if(count(tableau de tweet)==10){
$text = file_get_contents("mots.txt");
echo $text;
}*/

 ?>
