<?php

// required code - can not be modified ////
handle = fopen ("php://stdin","r");
$i=4;
$d=4.0;
$s="HackerRank";
///////////////////////////////////////////

/* hackerank
 *
 * 30-data-types
 */

/* Read each line of input , compute and print the result*/
$result=fgets($handle); $result+=$i; printf("$result\n");
$result=fgets($handle); $result+=$d; printf("%.01f\n",$result);
$result=fgets($handle); $result=$s.$result; printf("$result\n");

// required code - can not be modified ////
fclose($handle);
///////////////////////////////////////////
?>
