
<?php
$host="localhost";
$user="root";
$pass="";
$db="demo";
$conn=mysqli_connect($host,$user,$pass,$db);
if (!$conn)
 {
	die("could not connected".mysqli_error());
}
if (isset($_POST['search']))
 {
	$userid=$_POST['userid'];
	$sql="select *from register where userid='$userid'";
	$query=mysqli_query($conn,$sql);
	if (mysqli_num_rows($query)>0)
	 {
		while ($row=mysqli_fetch_array($query))
		 {
			$userid=$row['userid'];
			$password=$row['pass'];
			$confirmpassword=$row['confirmpassword'];
			$email=$row['email'];
			$contact=$row['contact'];
			
			break;
		}
	}
	
}
if (isset($_POST['update']))
 {
	$userid=$_POST['userid'];
	$pass=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$sql="update register set userid='$userid',pass='$pass',confirmpassword='$confirmpassword',email='$email',contact='$contact' where userid='$userid'";
	$query=mysqli_query($conn,$sql);
	if ($query)
	 {
		echo "update successfuly";
	}
}

mysqli_close($conn);
?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>Update here</legend>
			<p>User ID<input type="text" name="userid" value="<?php echo @$userid; ?>"><input type="submit" name="search" value="verified"></p>
			<p>enter password<input type=" password" name="password" value=" <?php echo @$password; ?> "></p>
			<p>confirm password<input type=" password" name="confirmpassword" value="<?php echo@$confirmpassword; ?>"></p>
			<p>email<input type="email" name="email" value="<?php echo@$email; ?>"></p>
			<p>contact<input type="text" maxlength="10" name="contact" value="<?php echo@$contact; ?>"</p>
			<input type="submit" value="Update record" name="update">
		</fieldset>
		
	</form>

</body>
</html>
