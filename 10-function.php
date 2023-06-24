<?php

$password = ['pan ','pen ','book ','sun ','rain ','moon ','car ','laptop ','chair '];

echo "<br>";
function arr($password){

  $len= count($password);

for ($i=0; $i <$len ; $i++) {

     echo $password[$i];
}
}
echo "Your password is: ";
arr($password);
/*Output:
Your password is: pan pen book sun rain moon car laptop chair
*/

 ?>
