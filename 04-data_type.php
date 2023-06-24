<?php

$student_ID=101;
$pass= true;
$marks=81;
$extra_Marks=1.50;
$Subject="Math";
var_dump(is_bool($pass));//test boolean
var_dump(is_int($marks));//test integer
var_dump(is_float($extra_Marks));//test float
var_dump(is_string($Subject));//test string
echo "<br>";

if ($marks>=40 && $pass) {//if condition
  echo "He cleared the exam and got total ".$marks+$extra_Marks." marks at ".$Subject.".<br>";

}
else {
  echo "Failed.";
}

$class_Test = array("student_ID"=> $student_ID,"pass"=>$pass,"marks"=>$marks,"extra_Marks"=>$extra_Marks,"Subject"=>$Subject);//create an array.
var_dump(is_array($class_Test));//test aryay
echo "<br>";
print_r($class_Test);//print array



/*Output:
bool(true) bool(true) bool(true) bool(true)
He cleared the exam and got total 82.5 marks at Math.
bool(true)
Array ( [student_ID] => 101 [pass] => 1 [marks] => 81 [extra_Marks] => 1.5 [Subject] => Math )
*/
 ?>
