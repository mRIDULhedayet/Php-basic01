<?php

$number_int=81;
$number_int=(string)81;//integer to string
var_dump($number_int);
echo "<br>";
$number_str=(int)$number_int;//string to integer
var_dump($number_str);
echo "<br>";
$number_arr=(array)$number_str;//integer to array
var_dump($number_arr);
echo "<br>";
$num_int=(int)$number_arr[0];//array to integer
var_dump($num_int);
/*output:
string(2) "81"
int(81)
array(1) { [0]=> int(81) }
int(81) 
*/
 ?>
