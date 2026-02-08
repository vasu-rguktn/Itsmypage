<?php

//arrays
$games = array("foosball","TT","Pool");
print_r($games);
echo "<br>";

$games =["pool","foosball","TT"];
print_r($games);
echo "<br> Intresting game is: " , $games[1];

$movies= array("fav"=>"Jersey","allTimeFav"=>"Khaleja");
echo "<br> all Time Fav :";
print_r($movies['allTimeFav']);

$poets =["revolutionary"=>"Sri Sri","romantic"=>"kalidasu"];
echo "<br> Famous poet is:";
print_r($poets['revolutionary']);
