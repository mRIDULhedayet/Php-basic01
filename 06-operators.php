<?php

function All_operators($val_1,$val_2) {
$neg_val_1 = -$val_1;
echo "Negation value of var_1: ".$neg_val_1."<br>";

$sum = $val_1 + $val_2;
echo "Addition : ".$sum."<br>";


$sub = $val_1 - $val_2;
echo "Subtraction  : ".$sub."<br>";

$multi = $val_1 * $val_2;
echo "Multiplication :".$multi."<br>";

$div = $val_1 / $val_2;
echo "Division : ".$div."<br>";

$mod = $val_1 % $val_2;
echo "Modulus : ".$mod."<br>";

$expo = $val_1 ** $val_2;
echo "Exponentiation : ".$expo."<br>";

if (is_int($val_1) && is_int($val_2)) {
  // code...
  $val_1 += $val_2;
  echo "val_1 = val_1 + val_2:  ".$val_1."<br>";

  $val_1 -= $val_2;
  echo "val_1 = val_1 - val_2:  ".$val_1."<br>";

  $val_1 *= $val_2;
  echo "val_1 = val_1 * val_2:  ".$val_1."<br>";

  $val_1 /= $val_2;
  echo "val_1 = val_1 / val_2:  ".$val_1."<br>";

  $val_1 %= $val_2;
  echo "val_1 = val_1 % val_2:  ".$val_1."<br>";


  $val_1=10;//assign val_1 value
  $val_1++; // value increase by 1
  $val_2--; // valur decrease by 1

  echo ($val_1>$val_2) ? ("val_1 > val_2") :  ("val_1<val_2");
  echo "<br>";

  $val_1 **= $val_2;
  echo "val_1 = val_1 ** val_2 = ".$val_1;

}

}

All_operators(16,4);
/*Output:
Negation value of var_1: -16
Addition : 20
Subtraction : 12
Multiplication :64
Division : 4
Modulus : 0
Exponentiation : 65536
val_1 = val_1 + val_2: 20
val_1 = val_1 - val_2: 16
val_1 = val_1 * val_2: 64
val_1 = val_1 / val_2: 16
val_1 = val_1 % val_2: 0
val_1 > val_2
val_1 = val_1 ** val_2 = 1331
*/
 ?>
