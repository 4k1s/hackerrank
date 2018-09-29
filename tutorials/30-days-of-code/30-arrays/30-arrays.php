<?php

/* hackerank
 *
 * 30-arrays
 */

define ('EX_OK',0);
$handle = fopen ("php://stdin","r");

fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
fclose($handle);

$arr = explode(" ",$arr_temp);
/* this is a bug! intval() does not modify its arguments
** so teh following code does not work
** array_walk($arr, 'intval');
*/

/* correct version - modify the arguments */
array_walk($arr, function(&$e) { 
   $e = intval($e);
});

array_walk($arr, 'intval');
$rev_array=array_reverse($arr);
$result=implode(" ",$rev_array);
echo $result."\n";

exit(EX_OK);
?>
