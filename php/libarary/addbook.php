<?php 
$host="localhost";
$user="root";
$pass="";
$db="libarary";
$conn=mysqli_connect($host,$user,$pass,$db);
if (!$conn)
 {
	die("could not connect".mysqli_error());
}   
if (isset($_POST['submit']))
 {
 	$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "image/".$filename;
    $author=$_POST['author'];
	$bookname=$_POST['bookname'];
	$detail=$_POST['detail'];
	
	$price=$_POST['price'];
	$quantity=$_POST['quantity'];
	$sql="insert into book values('$bookname','$detail','$author',$price,$quantity,'$filename')";
	mysqli_query($conn,$sql);
	if (move_uploaded_file($tempname, $folder)) 
	 {
            $msg = "Record Inseted successfully";
        }
        else
        {
            $msg = "Failed to Insert";
      	}
      	echo"<script>alert('$msg')</script>";
}
mysqli_close($conn);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>sr library</title>
	<link rel="stylesheet" type="text/css" href="lms.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		.w
		{
			height:40px;
			width: 230px;
			font-size:large;
		}
		tr{height:50px;margin:10px;}
	</style>

</head>
	
<body>
	<center>
<div class= "outer">
<div class="banner">
	<img src="image/logol.jpg" height="200" width="900">
</div>
<div class="work">
	<div class="menu">
		<div class="pp">Welcome</div>
		<div class="pp"><a href="admin.php" class="btn btn-success w">Admin</a></div>
		<div class="pp"><a href="addbook.php" class="btn btn-success w"> Add Book</a></div>
		<div class="pp"><a href="bookreport.php" class="btn btn-success w">Book Report</a></div>
		<div class="pp"><a href="addstudent.php" class="btn btn-success w" >Add Student</a></div>
		<div class="pp"><a href="studentreport.php" class="btn btn-success w">Student Report</a></div>
		<div class="pp"><a href="issuebook.php" class="btn btn-success w">Issue Book</a></div>
		<div class="pp"><a href="issuereport.php" class="btn btn-success w">Issue Report</a></div>
		<div class="pp"><a href="returnbook.php" class="btn btn-success w">Return Book</a></div>
		<div class="pp"><a href="penality.php" class="btn btn-success w">Penality</a></div>
		<div class="pp"><a href="SRLibrary.php" class="btn btn-success w">Logout</a></div>
	</div>
	<div class="part">
		<div class="header">Add New Book</div>
		<div class="kk form-outline">
			<br><br>
			<form method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>BookName</td>
					<td><input type="text" name="bookname" class="form-control"></td>
				</tr>
				<tr>
					<td>Detail:</td>
					<td><input type="text" name="detail" class="form-control"></td>
				</tr>
				<tr>
					<td>Author:</td>
					<td><input type="text" name="author" class="form-control"></td>
				</tr>
				<tr>
					<td>Price:</td>
					<td><input type="text" name="price" class="form-control"></td>
				</tr>
				<tr>
					<td>Quantity:</td>
					<td><input type="text" name="quantity" class="form-control"></td>
				</tr>
				<tr>
					<td>Book Photo :</td>
					<td> <input type="file" name="uploadfile"  value="" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="submit" class="btn btn-danger" value="Add Book"></center></td>
				</tr>
			</table>
			</form>
		</div>
	</div>
</div>
</div>
</center>
</body>
</html>