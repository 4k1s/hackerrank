<?php

/* 
 * AVeryBigSum.php
 * 11/24/2015
 */

function compute_big_sum($value_arr,$key_arr)
{
  global $sum;
  $sum = bcadd($sum, $value_arr);
  return;
}

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
/* we need string, so no casting to int is needed*/
/* array_walk($arr,'intval'); */
$sum='';
array_walk($arr,'compute_big_sum');
echo $sum."\n";

?>
