<?php
//files- chudham mawa
$fpath="titles.txt";
$readF=file($fpath);
print_r($readF);

//array lo chusav ga ipdu  fopen chesi chudu
echo "<br><br>";
echo "<h2 style='color:slateblue;'>fopen chesi chudu <br></h2>";
$fiOpn = fopen($fpath, "r");
$fiLeer = fread($fiOpn, filesize($fpath));
echo $fiLeer;
fclose($fiOpn);
 echo " <hr> ipoindi";
// chusav ga ipdu write chey bro..!
echo " chusav ga ipdu write chey bro..!";

$fEscribo = fopen('title.txt', "a+");
echo "<br><br>";
// echo $fEscribo;
// fclose($fEscribo);
echo "<br><br>";
$fRite = fwrite($fEscribo, " yo escribo mucho");
echo "<br><br>";
echo "<h2 style='color:slateblue;'>fwrite chesindi chudu </h2>";
echo "$fRite";
fclose($fEscribo);
 // last ga epdu access chesav ?
 echo '<hr>';
 echo fileatime($fpath);
echo " emayindhi raa -  ?";
echo " <br>  ardhammavledha ? - sare time chudu ikkada - ";
$LastAT = fileatime($fpath);
echo date("Y-m-d H:i:s", $LastAT);

echo " <br> <br>adhe UNix TS ante - sare ne Birthday dhi chudu";
echo "<hr>";
echo strtotime("2000-04-25");

?>