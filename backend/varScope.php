<?php
$v;
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
}
locScope();


function pagehits(){
   static $hits=0;
    $hits++;
    echo $hits;
}
pagehits();
pagehits();

?>