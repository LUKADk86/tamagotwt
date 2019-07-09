<?php
/*Inclure tout les fichiers PHP besoins*/
require_once('TwitterAPIExchange.php');
/*require_once("mot.php");*/


$settings =
[
'oauth_access_token' => "1145640724618252288-wWZXOQZAXnrZCsbnj0oKCOGa0zAF7t",
'oauth_access_token_secret' => "QJOAolGUykH7ETSuhzRhH2sfKYu985zCwSIPfO9FgEFm0",
'consumer_key' => "WLBVVBcx45nXorKa7ZLmLeKzt",
'consumer_secret' => "CrcVV0mLJ8NZYrU3ZQfBR2psgeQJSleWhDwLknFCwxcJO6V729"
];


$url2= "https://api.twitter.com/1.1/statuses/update.json";

$requestMethod2= "POST";

if (isset($_POST['tweet'])){
$postfield= ['status'=>$_POST['tweet']];


$twitter = new TwitterAPIExchange($settings);


$twitter->buildOauth($url2, $requestMethod2)            /*POST   TWEET*/
             ->setPostfields($postfield)
             ->performRequest();

}





/*$i =1;
foreach($tabreturn as $key)                                               /*EXEMPLE D'AFFICHAGE DES DONNEES*/
    /*{
        echo "<strong>Tweet N°".$i."</strong><br />";
        echo "Time and Date of Tweet: ".$key['created_at']."<br />";
        echo "Tweet: ". $key['text']."<br />";
        echo "Tweeted by: ". $key['user']['name']."<br />";
        echo "Screen name: ". $key['user']['screen_name']."<br />";
        echo "Followers: ". $key['user']['followers_count']."<br />";
        echo "Friends: ". $key['user']['friends_count']."<br />";
        echo "Retweet: ". $key['retweet_count']."<br />";
        $i++;
      }
    echo "Il y a ".count($tabreturn)." tweets affichés.";*/



?>
