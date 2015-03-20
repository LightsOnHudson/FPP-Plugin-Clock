#!/usr/bin/php
<?php


$today = date("F j, Y, g:i a"); 
$today = date("g:i a"); 

$cmd = "/home/pi/media/plugins/fpp-matrixtools/scripts/matrixtools --blockname 2x3-top --clearblock";
exec($cmd,$output);
$cmd = "/home/pi/media/plugins/fpp-matrixtools/scripts/matrixtools --blockname 2x3-top --enable 1";
exec($cmd,$output);
$cmd = "/home/pi/media/plugins/fpp-matrixtools/scripts/matrixtools --blockname 2x3-top --message '".$today."' --position center --fontsize 16";

exec($cmd,$output);
print_r($output);

?>
