

<form action="11-form_get_method.php" method="get">
  <br><input name="src1"/>
  <input type="submit" value="Search"/>
</form>

<?php

$str_1="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
@$src= $_GET["src1"];
$position = strpos($str_1,$src);
if (!empty($src)) {
  // code...


if ($position === false) {
  // code...
  echo "The string slic '$src' was not found in the paragraph.";
}
else {

  echo "The string '$src' was found in the paragraph."."<br>";
  echo " And exists at position $position";
}
}
/*Output:
The string 'Lorem' was found in the paragraph.
And exists at position 0
*/
 ?>
