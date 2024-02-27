<?php
$host="localhost";
$user="root";
$pass="";
$conn=mysqli_connect($host,$user,$pass);
if (!$conn)
 {
	die("could not connect".mysqli_error());
}
echo "connection successfully";
mysqli_close($conn);
?>
