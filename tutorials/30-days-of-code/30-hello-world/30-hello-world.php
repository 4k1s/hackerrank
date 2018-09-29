<?php

/* hackerank
 *
 * Tutorials 30 Days of Code Day 0: Hello, World.
 */

define ('EX_OK',0);
$handle = fopen ("php://stdin","r");
$input=fgets($handle);

print ('Hello, World.'); print ("\n");
print ($input); print ("\n");

fclose($handle);
exit(EX_OK);
?>
