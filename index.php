<?php 	
require __DIR__ . '/vendor/autoload.php';
use LeagueWrap\Api;
 $myKey = 'YOUR-DEVELOPER-RIOT-API-KEY';
$api = new Api($myKey);
$game = $api->game();
$games = $game->recent(74602);
$matchlistapi = $api->matchlist();
$matchlist = $matchlistapi->matchlist(74602);
$numberOfplayedGames = $matchlist->totalGames;
$roleInGame = $matchlist->match(0)->role;
print_r($matchlist);
 ?>
