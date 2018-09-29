<?php

/* 
 * Staircase.php
 * 11/25/2015
 */


$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

for ($c=0;$c<$n;$c++)
  {
    echo str_repeat(" ",$n-$c-1);
    echo str_repeat("#",$c+1);
    echo "\n";
  }
?>
