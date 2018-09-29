<?php

/* 
 * TaumAndBDay.php
 * 12/14/2015
 */

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($c = 0; $c < $t; $c++){
     fscanf($handle,"%d %d",$b,$w);
     fscanf($handle,"%d %d %d",$x,$y,$z);

     $bw=$b+$w;     
     $cost[$c]=$b*$x+$w*$y;
     $cost_to_black=$bw*$y+$b*$z;
     $cost_to_white=$bw*$x+$w*$z;
     $cost[$c]=min($cost[$c],$cost_to_white,$cost_to_black);
}

foreach ($cost as $output)
{
     echo $output."\n";
}

?>
