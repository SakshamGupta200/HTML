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
if (isset($_POST['gp']))
 {
	$userid=$_POST['userid'];
	$email=$_POST['email'];
$sql="select *from register";
$query=mysqli_query($conn,$sql);
if (mysqli_num_rows($query)>0)
 {
	while ($row=mysqli_fetch_array ($query))
	 {
		if ($row['userid']==$userid && $row['email']==$email)
		 {
			echo "<h2>your password is :".$row['password']."</h2>";
			break;
			}
		}
	}
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>forget password</title>
</head>
<body>
	<form method="post">
		<fieldset style="width: 500px;">
			<legend>Forget password</legend>
			<p>User ID<input type="text" name="userid"></p>
			<p>Email<input type="email" name="email"></p>
			<input type="submit" value="Create Password" name="gp">
		</fieldset>
		
	</form>

</body>
</html>