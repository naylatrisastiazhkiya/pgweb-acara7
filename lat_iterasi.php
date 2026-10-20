<?php
/* $i = 1; // Initialize counter
while ($i < 100) { // Check condition
    echo $i."<br>";// Excute code 
    $i = $i + 1; // $i++;
}
*/

/*
for($i=1; $i < 100; $i++) {
    echo $i."<br>";
}
*/


$colors=array("fad", "fadilla", "dila", "dil");
foreach($colors as $value) {
    echo $value."<br>";
}

for($i=0; $i<=3; $i++) {
    echo $colors[$i]."<br>";
}   
?>