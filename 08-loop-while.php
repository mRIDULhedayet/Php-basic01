<?php
$array_A = [1,2,3,5,6,7,8];
$a=0;

function arr($array_A,$a){

  $len= sizeof($array_A);

  while ($a <=$len-1 ) {

    echo $array_A[$a]."<br>";
    $a++;
  }
}

arr($array_A,$a);
/*Output:
1
2
3
5
6
7
8
*/

 ?>
