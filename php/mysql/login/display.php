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
echo "<table border=1>";
echo "<tr><th>userid</th>";
echo "<th>password</th>";
echo "<th>confirmpassword</th>";
echo "<th>email</th>";
echo "<th>contact</th></tr>";
$sql="select *from register";
$query=mysqli_query($conn,$sql);
if (mysqli_num_rows($query)>0)
 {
	while ($row=mysqli_fetch_array ($query))
	 {
		echo "<tr>";
		echo "<td>".$row['userid']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td>".$row['confirmpassword']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['contact']."</td>";
		echo "</tr>";
	}
}
mysqli_close($conn);
?>
<body>
	<a href="login.php">Login</a><br><br>
	<a href="register.php">Back</a>
</body>