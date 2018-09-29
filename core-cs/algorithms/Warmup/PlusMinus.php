<?php

/* 
 * PlusMinus.php
 */

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

for($positive=0,$negative=0,$zero=0,$c=0;$c<$n;$c++)
  {
    if ($arr[$c]>0)
      {
	$positive++;
      }
    if ($arr[$c]<0)
      {
	$negative++;
      }
    if ($arr[$c]==0)
      {
	$zero++;
      }
  }

$p_result=$positive/$n;
$n_result=$negative/$n;
$z_result=$zero/$n;

printf("%.03f\n",$p_result);
printf("%.03f\n",$n_result);
printf("%.03f\n",$z_result);
   
?>
