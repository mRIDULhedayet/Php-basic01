<?php
$num=25;
$str=" poients";

function Calculate_poients($num,$str){

  if (is_int($num) && is_int($str)) {
    $sum= $num + $str;
    echo $sum." poients.";
  }
  elseif (is_int($num) && is_string($str)) {
    // code...
    $concatenate = $num.$str;
    echo $concatenate;
  }
  else {
    echo "condition does not match.";
  }

}
Calculate_poients($num,$str);

//Output: 25 poients
 ?>
