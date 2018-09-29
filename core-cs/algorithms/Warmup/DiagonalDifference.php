<?php

/* 
 * DiagonalDifference.php
 * 11/24/2015
 */

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
if ($n==1)
  {
    $result=0;
  }
else
  {
$a = array();
for($a_i = 0; $a_i < $n; $a_i++)
  {
   $a_temp = fgets($handle);
   $a[] = explode(" ",$a_temp);
  array_walk($a[$a_i],'intval');
  }

/* compute firt diagonal*/
for($first_diagonal=0,$c = 0; $c < $n; $c++)
  {
    $first_diagonal+=$a[$c][$c];
  }

/* compute second diagonal*/
for($second_diagonal=0,$c = 0; $c < $n; $c++)
  {
    $second_diagonal+=$a[$c][$n-$c-1];
  }

$result=abs($first_diagonal-$second_diagonal);
  }

echo $result."\n";

?>
