<?php

/* hackerank
 *
 * 30-review-loop
 */

define ('EX_OK',0);
$handle = fopen ("php://stdin","r");

fscanf($handle,"%d\n",$n);
/* for every line read word , compute and print*/
for ($c=0;$c<$n;$c++){
fscanf($handle,"%s\n",$s);
$l=strlen($s); $r1=ceil($l)/2; $r2=$l-$r1;

/* print the odd characters in string*/
for ($cur=0;$cur<$r1;$cur++)
  {
      print $s[$cur*2];
  }
 print ' ';

 /* print the even characters in string*/
for ($cur=0;$cur<$r2;$cur++)
  {
      print $s[$cur*2+1];
  }
 print "\n";
}

fclose($handle);
exit(EX_OK);

?>
