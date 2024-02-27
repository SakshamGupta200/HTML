<?php
$host="localhost";
$user="root";
$password="";
$db="demo";
$conn=mysqli_connect($host,$user,$password,$db);
if (!$conn)
 {
	die("could not connect".mysqli_error());
}
if (isset($_POST['login']))
 {
	$uid=$_POST['userid'];
	$password=$_POST['pass'];
	$sql="select *from register where userid='$uid' and password='$password'";
	$query=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($query);
	if ($count==1)
	 {
		header("Location:home.php");
	}
	else
	{
		echo "invalid user id or password";
	}
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
</head>
<body>
	<form method="post">	
	<fieldset style="width: 500px; text-align: center; background-color: cyan;color: maroon;">
		<legend style="font-weight: bolder;">LOGIN</legend>
		<p>User ID<input type="text" name="userid"></p>
		<p>password<input type="password" name="password"></p>
		<input style="background-color:limegreen;border-radius: 50px;box-shadow: 5px 5px 5px #111;" type="submit" value="login" name="login"><br>
		<a href="register.php">New User</a><br>
		<a href="forget.php">Forget password</a>
	</fieldset>
</form>
</body>
</html> 