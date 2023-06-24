<?php

$string="This is a \"String\" "."<br>";//If single or double quotes are required inside the string we can do this
echo $string;
$string_1='Now it\'s 12 \'o clock'.'<br>';
echo "$string_1";
$String_2=<<<TEST
Testing
 another
 string
 format.
TEST;
echo "$String_2"."<br>";
echo "string length: ".strlen($string);
/*Output:
This is a "String"
Now it's 12 'o clock
Testing another string format.
string length: 23
*/
 ?>
