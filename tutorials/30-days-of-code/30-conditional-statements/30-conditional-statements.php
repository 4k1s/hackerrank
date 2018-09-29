<?php

/* hackerank
 *
 * 30-conditional-statements
 */

define ('EX_OK',0);
$handle = fopen ("php://stdin","r");
$w="Weird\n"; $nw="Not Weird\n";

$number=fgets($handle);
if (($number%2)==1){
    /* number is odd*/
    echo $w;
    fclose($handle);
    exit(EX_OK);
}
/* number is even*/
if ($number>=6 && $number<=20){
    /* number is in [6,20] space*/
    echo $w;
    fclose($handle);
    exit(EX_OK);
}

/* number n<6 or n>20*/
echo $nw;
fclose($handle);
exit(EX_OK);
?>
