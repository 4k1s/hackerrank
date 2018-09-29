<?php

/* 
 * SimpleArraySum.php
 * 11/24/2015
 */

function compute_sum($value_arr,$key_arr)
{
  
  global $sum;
  $sum+=$value_arr;
  return;  
}
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');
array_walk($arr,'compute_sum');
echo $sum."\n";
?>
