


<form action="12-form_post_method.php" method="post">
  <h2>UserName: <input name="name" required/></h2>
    <h2>Password: <input type="password" name="password" required/><br></h2>
  <input type="submit" value="submit"/>
</form>


<?php

$user= $_POST['name'];
$pass= $_POST['password'];
if (!empty($user) && !empty($pass)) {
  echo "Your user name is:".$user."<br>";
  echo "And password : ".$pass;
}

/*Output:
Your user name is:mridul
And password : 123456
*/

 ?>
