<?php
$host="localhost";
$user="root";
$pass="";
$db="student";
$conn=mysqli_connect($host,$user,$pass,$db);
if (!$conn)
 {
	die("could not connect".mysqli_error());
}
echo "connection successfully<br>";
$sql="select *from sbi";
$query=mysqli_query($conn,$sql);
if (mysqli_num_rows($query)>0)
 {
	while ($row=mysqli_fetch_array ($query))
	 {
		echo "empid:{$row['empid']}".
		"name:{$row['name']}".
		"salary:{$row['salary']}".
		"<br>gender:{$row['gender']}<br>";
	}
}
mysqli_close($conn);
?>
