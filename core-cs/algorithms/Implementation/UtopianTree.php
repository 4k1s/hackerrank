<?php

/* 
 * UtopianTree.php
 * 12/18/2015
 */

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($c = 0; $c < $t; $c++)
{
     fscanf($handle,"%d",$n);
     $N["$c"]=$n;
}

for($c1=0;$c1<$t;$c1++)
{
     for($H='1',$c2=1;$c2<=$N["$c1"];$c2++)
     {
	  if ($c2%2==1)
	  {
	       $H=bcmul('2',$H);
	  }
	  else
	  {
	       $H=bcadd('1',$H);
	  }
     }
     echo $H."\n";
}

?>
