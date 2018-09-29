<?php

/* 
 * SherlockAndTheBeast.php
 * 11/26/2015
 */

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
$number=array();

for($a0 = 0; $a0 < $t; $a0++)
  {
    fscanf($handle,"%d",$n);
    array_push($number,$n);
  }

for ($c=0;$c<$t;$c++)
  {
    $cnumber=$number[$c]; $threes=0;$fives=0; $antivirus=0;
    while ($number>0)
      {
    /* is N divisable by 3? */
    if (($cnumber%3)==0)
      {
	$fives=$cnumber;
	break;
      }
    else
      {
	$cnumber-=5; $threes+=5;
	if ($cnumber<0)
	  {
	    $antivirus='-1';
	    break;
	  }
      } 
   }
    if ($antivirus!='-1')
      {
	$antivirus=str_repeat("5",$fives).str_repeat("3", $threes);
      }
    echo $antivirus;
    echo "\n";
  }

?>
