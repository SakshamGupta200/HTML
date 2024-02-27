<?php
$host="localhost";
$user="root";
$pass="";
$db="demo";
$conn=mysqli_connect($host,$user,$pass,$db);
if (!$conn)
 {
	die("could not connect".mysqli_error());
}
if (isset($_POST['register'])) 
{
	$uid=$_POST['userid'];
	$pass=$_POST['password'];
	$cpass=$_POST['confirmpassword'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
 	
 	$sql="insert into register values('$uid','$pass','$cpass','$email','$mob')";
 	$query=mysqli_query($conn,$sql);
 	if ($query)
 	 {
 		header("location:display.php");
  	}
  	else
  	{
  		echo "error generated";
  	}
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>regester here</title>
	<style type="text/css">
	input
	{
		float: left;
	}
	

</style>
</head>
<body>
	<form method="post">	<fieldset style="width: 500px; background-color: cyan;color: maroon;text-align: center;">
		<legend style="font-weight: bolder;">Regester Here</legend>
		<p>User ID<input type="text" name="userid"></p>
		<p>Password<input type="password" name="password"></p>
		<p>Confirm password<input type="password" name="confirmpassword"></p>
		<p>Email<input type="email" name="email"></p>
		<p>contact<input type="text" maxlength="10" name="mob"></p>
		<input style="background-color:limegreen;border-radius: 50px;box-shadow: 5px 5px 5px #111;" type="submit" value="register" name="register">
	</fieldset>
	</form>


</body>
</html>