<?php

/* Sourch: hackerank
 * URL: https://www.hackerrank.com/contests/w30/challenges/candy-replenishing-robot
 * Problem: candy-replenishing-robot
 */

define ('EX_OK',0);
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$t);
$c_temp = fgets($handle);
fclose ($handle);

$c = explode(" ",$c_temp);
array_walk($c, function(&$e) { 
   $e = intval($e);
});

/* compute result*/ 
for ($round=0,$candies=$n,$result=0;$round<$t-1;$round++)
{
    $candies-=$c[$round];
    if($candies<5){
        $refill=$n-($candies);
        $candies+=$refill;
        $result+=$refill;
    }
}

echo $result.PHP_EOL;
exit(EX_OK);
?>
