<?php

/* 
 * TimeConversion.php
 * 11/25/2015
 */

$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$time);
$pm='P';
$check_pm=strpos($time,$pm);

 /* get the hours and convert them*/
    $hours=substr($time,0,2);
    $hours=intval($hours);

/* Is it PM? */
if ($check_pm!==false)
  {
    $hours+=12;
    /* check if it is noon */
    $hours=strval($hours);
    if ($hours=='24')
      {
	$hours='12';
      }
    
  }
else
  {
   /* check if it is midnight */
    $hours=strval($hours);
    
    if ($hours=='12')
      {
	$hours='00';
      }
  }
$time=substr($time,2);
if (strlen($hours)==1)
  {
    $hours='0'.$hours;
  }

$time=$hours.$time;
  

/* remove the AM/PM substring*/
$time=substr($time,0,-2);

 echo $time."\n";

?>
