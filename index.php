<?php 	
require __DIR__ . '/vendor/autoload.php';
use LeagueWrap\Api;
 $myKey = '6b358a5a-85ca-49d1-92d4-b148e1344e2c';
$api = new Api($myKey);
$game = $api->game();
$games = $game->recent(74602);
$matchlistapi = $api->matchlist();
$matchlist = $matchlistapi->matchlist(74602);
$numberOfplayedGames = $matchlist->totalGames;
$roleInGame = $matchlist->match(0)->role;
print_r($matchlist);
 ?>