<?php
$array_A=range(1,9);
function arr($array_A){

  foreach ($array_A as $value) {
    // code...
    echo $value;
  }
}
arr($array_A);
/*Output:
123456789
*/


echo "<br>";
function ar($array_A){
  foreach ($array_A as $key => $value) {
    // code...
    echo "key " .$key." => ". $value."<br>";
  }
}

ar($array_A);
/*Output:
key 0 => 1
key 1 => 2
key 2 => 3
key 3 => 4
key 4 => 5
key 5 => 6
key 6 => 7
key 7 => 8
key 8 => 9
*/
 ?>
