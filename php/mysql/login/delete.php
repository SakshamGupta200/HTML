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
if (isset($_POST['del']))
 {
	$userid=$_POST['uid'];
	$sql="delete from register where userid='$userid'";
	$query=mysqli_query($conn,$sql);
	if ($query)
	 {
		header("Location:display.php");
	}
	else
	{
		echo "invalid user id";
	}
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>delete</title>
</head>
<body>
	<form method="post">
		<fieldset style="width: 500px;">
			<legend>Delete</legend>
			<p>User ID<input type="text" name="uid"></p>
			<input type="submit" value="delete" name="del">
		</fieldset>		
	</form>
</body>
</html>