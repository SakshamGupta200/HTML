<?php

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
		td{
			width:300px;


		}
	</style>

</head>
	
<body>
	<center>
<div class= "outer">
<div class="banner">
	<img src=" image/logol.jpg" height="200" width="900">
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
		<div class="pp"><a href="logout.php" class="btn btn-success w">Logout</a></div>
	</div>
	<div class="part">
		<div class="header">Book Issue Form</div>
		<br><br>
		<p>Select Book <select>
			<option>Java</option>
			<option>Asp.net</option>
			<option>Php</option>
			<option>Python</option>
			<option>c++</option>
			<option>c language</option>
			<option>html</option>
			<option>objective c</option>
			<option>javaScript</option>
			<option>C#</option>
			<option>SQL</option>

		</select>
<input type="submit" value="Select"  name="">
	</p>
	<br>
	

	<div class="header">View Book Details</div>
	<br><br>
	<table>
		
		<tr>
			<td rowspan="5">
				<img src=" image/tttt.JFIF" height="150" width="200">
			</td>
			<td><label>Author:</label></td><td><label>Dinesh Sir</label></td>
		</tr>
		<tr>
			<td><label>Price:</label></td><td><label>1200</label></td>
		</tr>
		<tr>
			<td><label>Total Quantity:</label></td><td><label>10</label></td>
		</tr>
		<tr>
			<td><label>Available Quantity:</label></td><td><label>4</label></td>
		</tr>
		<tr>
			<td><label>Rent Quantity:</label></td><td><label>6</label></td>
		</tr>
		
	</table>
	<hr>
	<p>Select Students Detail for Issue Book </p>
	<hr>
	<p><label>Select Students:</label><input type="text" name=""> Days
<input type="number" min="1" max="15" name="">&nbsp;&nbsp;<input type="submit" name=""  Value="Book Issue">
	</p>
	</div>
</div>
</div>
</center>
</body>
</html>