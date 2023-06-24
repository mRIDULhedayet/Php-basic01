<?php
$array_B = [1,2,3,5,6,7,8];

echo "<br>";
function arr($array_B){

  $len= count($array_B);

for ($i=0; $i <$len ; $i++) {

     echo $array_B[$i];
}
}

arr($array_B);
/*Output:
1235678
*/



echo "<br>";
 function ar($array_B){

   $len= count($array_B);
 echo "<br>";
 for ($i=0; $i <$len ; $i++) {

      echo $array_B[$i]."<br>";
 }
 }

 ar($array_B);
 /*Output:
 1
 2
 3
 5
 6
 7
 8
 */



 echo "<br>";
 function aar($array_B){

   $len= count($array_B);

 for ($i=0; ; $i++) {
      if ($i <$len) {

        echo $array_B[$i];
      }
      else {
        break;
      }

 }
 }

 aar($array_B);
 /*Output:
1235678
 */

  echo "<br>";
  function aarr($array_B){
    echo "<br>";
    $len= count($array_B);

  for ($i=0; ; ) {
       if ($i <$len) {

         echo $array_B[$i]."<br>";
       }
       else {
         break;
       }
   $i++;
  }
  }

  aarr($array_B);
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
