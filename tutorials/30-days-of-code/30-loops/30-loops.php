<?php

/* hackerank
 *
 * 30-loops
 */

define ('EX_OK',0);
/* tead the number */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$number);
fclose($handle);

/* our loop*/
for ($c=1;$c<=10;$c++){
    $product=$number*$c;
    printf("%d x %d = %d\n",$number,$c,$product);
}

exit(EX_OK);
?>
