<?php
$s1="hellooooo..!";
echo("$s1");
echo strtoupper($s1);
$expl = " hello , neninthe ,broo";
$strArray = explode(",",$expl);
echo $strArray[0];
print_r($strArray);

print_r(explode(",","heelo ,vasu broo"));  
echo "<br>";
echo ucwords("hola amigos, como estas");
echo strpos("hey hermano..!","hey");
echo "<br>" , strpos("hola hermano..!","hermano..!");
echo "<br>";
print(strpos("el es vasu","es"));

echo strcmp("computadoras","computadoras");
echo "<br>";
echo strcmp("te","cafe");
echo "<br>";
echo strcmp("Traffic Lo Pelli Chupulu","inkennalu ee konnaalu");
echo "<br>";
echo str_replace("yo aprendo php","php","yo aprendo espanol");
echo "<br>";
echo str_replace("vasu","bro","hey vasu, como estas vasu");


















?>