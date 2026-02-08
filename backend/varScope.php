<?php

$v=9;
function varScope(){
   global $v;
    echo $v;
}
varscope();

function locScope(){
 global $v;
 $v = 10;
    echo $v;
    global $n;
 $n="neninthe";
}
locScope();
echo"<br>", $n;


function pagehits(){
    static $hits=0;
    $hits++;
    echo $hits;
}
pagehits();
pagehits();

?>