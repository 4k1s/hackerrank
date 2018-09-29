<?php

/* Sourch: hackerank
 * URL: https://www.hackerrank.com/contests/w30/challenges/find-the-minimum-number
 * Problem: find-the-minimum-number
 */

define('EX_OK',0);
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
fclose ($handle);

for ($c=0,$result='';$c<$n-1;$c++)
{
    $result.='min(int, ';    
}
$result.='int';    
for ($c=0;$c<$n-1;$c++)
{
    $result.=')';    
}

echo $result.PHP_EOL;
exit(EX_OK);
?>