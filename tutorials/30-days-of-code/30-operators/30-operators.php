<?php

/* hackerank
 *
 * 30-operators
 */

define ('EX_OK',0);
$handle = fopen ("php://stdin","r");

/* reade the dara*/
$meal_cost=fgets($handle);
$tip_percent=fgets($handle);
$tax_percent=fgets($handle);

/* compute and print the result*/
$total_cost=round($meal_cost*(1+($tip_percent+$tax_percent)/100));
printf("The total meal cost is %d dollars.\n",$total_cost);
           
fclose($handle);
exit(EX_OK);
?>