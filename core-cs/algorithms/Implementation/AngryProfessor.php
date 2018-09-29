<?php

/* 
 * AngryProfessor.php
 * 11/26/2015
 */

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++)
  {
    fscanf($handle,"%d %d",$n,$k);
    $a_temp = fgets($handle);
    $a = explode(" ",$a_temp);
    array_walk($a,'intval');
    
    for ($c=0,$on_time=0;$c<$n;$c++)
      {
	if ($a[$c]<=0)
	  {
	    $on_time++;
	  }
      }
    if ($k>$on_time)
      {
	echo "YES";
      }
    else
      {
	echo "NO";
      }
    echo "\n";
  }

?>
