<?php


if(isset($_POST['tweet'])){
 $letweet=$_POST['tweet'];

$mots = explode(" ", $letweet);
echo $compteur;

$fichier= fopen('mots.txt', 'r+');
fgets($fichier);

fputs($fichier, $mots[$compteur].' ');
 fgets($fichier);
fclose($fichier);
}
if($compteur==3){
$text = file_get_contents("mots.txt");
echo $text;

$postfield= ["status"=>$text];
$twitter = new TwitterAPIExchange($settings);
$twitter->buildOauth($url2, $requestMethod2)            /*POST   TWEET*/
             ->setPostfields($postfield)
             ->performRequest();
$fichier = fopen('mots.txt', 'r+');
ftruncate($fichier, 0);
fclose($fichier);
}

 ?>
