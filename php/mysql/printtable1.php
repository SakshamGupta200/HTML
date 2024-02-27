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
echo "<table border=1>";
echo "<tr><th>empid</th>";
echo "<th>name</th>";
echo "<th>salary</th>";
echo "<th>gender</th></tr>";
$sql="select *from sbi";
$query=mysqli_query($conn,$sql);
if (mysqli_num_rows($query)>0)
 {
	while ($row=mysqli_fetch_array ($query))
	 {
		echo "<tr>";
		echo "<td>".$row['empid']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['salary']."</td>";
		echo "<td>".$row['gender']."</td>";
		echo "</tr>";
	}
}
mysqli_close($conn);
?>
