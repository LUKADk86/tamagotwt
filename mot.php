<?php



 $letweet=$_POST['tweet'];
$mots = explode(" ", $letweet);


echo $compteur;

$fichier= fopen('mots.txt', 'r+');
$lu = fgets($fichier);
if(isset($mots[$compteur])){
fputs($fichier, $mots[$compteur].' ');
 fgets($fichier);
fclose($fichier);
}
if($compteur==3){
$text = file_get_contents("mots.txt");
echo $text;
}

 ?>
