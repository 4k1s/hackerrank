<?php
function solveMeFirst($a,$b){
  // Hint: Type return $a + $b; below  
  $sum_of_a_and_b=$a + $b;
    return $sum_of_a_and_b;
}
$handle = fopen ("php://stdin","r");
$_a = fgets($handle);
$_b = fgets($handle);
$sum = solveMeFirst((int)$_a,(int)$_b);
print ($sum);
fclose($handle);
?>
