<?php
$host="localhost";
$user="root";
$pass="";
$db="sankalp";
$conn=mysqli_connect($host,$user,$pass,$db);
if (!$conn)
 {
	die("could not connetce".mysqli_error());
}
if (isset($_POST['submit']))
 {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$message=$_POST['message'];
	$sql="insert into enquery value('$name','$email','$phone','$address','$message')";
	$query=mysqli_query($conn,$aql);
	if ($queru)
	 {
		header("Location:success.php");
	}
	else
	{
		echo "erroe generated";
	}
}
mysqli_close($conn)
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="cs/hdesign.css">
	<link rel="stylesheet" type="text/css" href="css1/bootstrap.min.css">
	<style type="text/css">
	#nav ul
		{
			display: none;
			background-color:maroon;
			position: absolute;
			top: 100%;
			color: white;

		}
		#nav li:hover ul
		{
			display: block;
			font-size: small;
			color: white;
			
			
			
		}
		#nav,#nav ul
		{
			margin: 0px;
			padding: 5px;

			list-style-type: none;
		}
		#nav
		{
			height: 30px;
			width: 1200px;

			background-color:olive;

		}
		#nav li
		{
			float: left;
			position:relative;

			
			margin-left: 20px;
		}
		
		

		#nav li:hover 
		{
			background-color:maroon;
			
			border-radius: 5px 5px;
		}
		

</style>
</head>
<body>
	<div class="container-fluid" style="margin-left: 50px;">
		<div class="outer">
			
			<div class="banner" style="font-size:xx-large;font-weight: bolder;text-align:center; background-color: yellow;">
				<div class="row">
					<div class="col-md-3">
						<img src="img/7.jpg" height="100" width="200">
						
					</div>
				<div class="col-md-7">
					<img src="img/cap.png" style="margin-top: 10px; height:80px;float: left;">
					</div>
					<div class="col-md-2">
						<img src="img/w2g.webp" height="80" width="100" style="margin-top: 15px;">						
					</div>	
				</div>
				
	 	</div>
	 	<div id="menu">
	 		<ul  id="nav">
	       <li><a style="color: white;" href="home.php">HOME</a></li>
	       <li><a style="color: white; "href="about.php">ABOUT US</a></li>
	       <li><a style="color: white;" href="#">ACADEMY</a>
	       	<ul>
	       		<li><a style="color: white;" href="afee details.php">FEE DETAILS</a></li>
	       		<li><a style="color: white;" href="a2.php">B.sc & B.com REGULAR CLASSES</a></li>
	       		<li><a style="color: white;" href="a3.php">9-12 UP & C.B.S.E BOARD</a></li>
	       	</ul>
	       </li>
	       <li><a style="color: white;" href="#">COMPITATIVE EXAMS</a>
       <ul>
       		<li><a style="color: white;" href="tetexam.php">TET EXAM</a></li>
       		<li><a style="color: white;" href="si.php">SI,SSC,BANK</a></li>
       	</ul>
       	</li>
       	<li><a style="color: white;" href="iit.php">IITJEE-NEET-FOUNDATION</a></li>
       	<li><a style="color: white;" href="#">ENTRANCE</a>
       		<ul>
       			<li><a style="color: white;" href="bed.php">B.ED </a></li>
       			<li><a style="color: white;" href="bcom.php">B.COM</a></li>
       			<li><a style="color: white;" href="bsc.php">B.SC</a></li>
       			<li><a style="color: white;" href="ba.php">BA </a></li>
       			<li><a style="color: white;" href="chs.php">C.H.S</a></li>
       		</ul>
       	</li>
       	<li><a style="color: white;" href="#">GALLERY</a>
       		<ul>
       			<li><a style="color: white;" href="10g.php">10 CBSE 2018</a></li>
       			<li><a style="color: white;" href="12g.php">12 CBSE 2018</a></li>
       			<li><a style="color: white;" href="bcomg.php">B.COM 2018</a></li>
       			<li><a style="color: white;" href="bedg.php">B.ED 2018</a></li>
       		</ul>
       	</li>
       	<li><a style="color: white;" href="#">LATEST UPDATES</a>
       		<ul>
       			<li><a style="color: white;" href="#">SANKALP PRATIBHA 2018</a></li>
       		</ul>
       	</li>
       	<li><a style="color: white;" href="contact.php">CONTACT US</a>
       		<ul>
       			<li><a style="color: white;" href="officemap.php">OFFICE MAP</a></li>
       		</ul>
       	</li>
       
       <div>
       	
   </div>
</ul>
	 		
	 			
	 		</div>
			 	
		
	 		
	 		
	 	

			<div class="slider" style="background-image: url('img/2gif.gif');background-repeat: no-repeat;background-size: cover;">
				<div id="enroll">Enroll Now<br>
					<input id="en" type="text" placeholder="Name" name="">
					<input id="en" type="email" placeholder="Email" name="">
					<input id="en" type="text" maxlength="10" placeholder="Mobile" name="">
					<input id="en" type="text" placeholder="Course Intrest" name="">
					<input id="en" type="text" placeholder="City" name="">
					<input style="box-shadow: 5px 5px 5px #111;" type="submit" value="submit" name="">
				</div>
			</div>

	


			
				<div class="work1" >
					<div class="container-fluid"  >
						<div class="row">
							<div class="col-lg-3">
								<img  style="margin-top:10px;" src="img/8.jpg" height="290" width="350">
							</div>
							<div  class="col-sm-9">
								<p  style="color:black; margin-left: 100px; margin-top: 20px; text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut<br> labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco<br><br> laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit <br><br>in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							</div>
						</div>
						
					</div>
					</div><br>
				
				<div class="work2">
					<h2 style="margin-left:30px;font-weight: bolder;">Reason To Choose Sankalp Tutorial</h2><br>
					<div class="container-fluid"  >
						<div class="row">
							<div class="col-lg-4">
								
								<p style="font-weight: bold;font-size: large;"><img src="img/c.png" height="30" width="40">CAREER COUNSELLING</p><br>
								<p style="font-weight: bold;font-size: large;"><img src="img/c.png" height="30" width="40">WORLD CLASS FACILITIES</p><br>
								<p style="font-weight: bold;font-size: large;"><img src="img/c.png" height="30" width="40">CAREER READY</p><br>
							</div>
							<div class="col-xl-8">
							<img src="img/9.jpg" height="200" width="700">	
							</div>
							
							</div>
						</div>
						
					</div>
					<div class="work3">
					<div class="container-fluid" >
						<div class="row">
							<div class="col-lg-4">
							<img src="img/10.jpg" height="300" width="380">								
							</div>
							<div class="col-lg-4">
							<img src="img/11.jpg" height="300" width="380">								
							</div>
							<div class="col-lg-4">
							<img src="img/12.jpg" height="300" width="380">								
							</div>
														
							</div>
						</div>
						
					</div>
					<div class="footer"> @Developed by RD & SG</div>
				</div>
			
		</div>
	</div>
</body>
</html>