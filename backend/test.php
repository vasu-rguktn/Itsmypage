
<html>
<head>
    <title>Test Page</title>    
    <h2> testing 

    <?php
echo "This prints multiple statements", "Hello files";
echo "<br>";
print("<br>");
print("this prints single statement only");

function getSum($a,$b){
return $a+$b;

}
$newV="vas";
echo "<hr> hey $newV <br>";
echo '<hr> hey $newV'; // will not parse variable in single quotes
echo "Hellooo this is something \n but something has something bcoz - new line comes <br> ";
echo ' <h4 style="color:slateblue;"> Hello this also something \n but has nothing bcoz new line does not come </h4> ';


//string concatenation
 echo '<br>'.$newV."neninthe";

 echo '<br>'.$newV .'neninthe';
 echo "<br>"."iam"."$newV"; 
 
 echo "<hr>". 'iam '. '$newV';

$sum = getSum (5,10);
echo "<br>", "Sum:",$sum;
?>



</h2>
    </head>
<
</html>
