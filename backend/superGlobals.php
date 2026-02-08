<?php
$v = " vasu";
$n = " neninthe ";

$GLOBALS['a']='vasu_neninthe';
function checkGlobals(){
    echo $GLOBALS['a'];
    $GLOBALS['s']='vn_';
}
checkGlobals();
echo "<br>" , $GLOBALS['s'];




?>