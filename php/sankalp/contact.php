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
	$sql="insert into enquery value('$name'=,'$email','$phone','$address','$message')";
	$query=mysqli_query($conn,$sql);
	if ($query)
	 {
		header("Location:success.php");
	}
	else
	{
		echo "erroe generated";
	}
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CONTACT US</title>
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
		

		#d
		{
			
			width: 875px;
			margin: 20px 10px ;
			border: 1px solid black;
		}
		th,td,b
		{
			height:60px;
			margin-left: 10px;
		}
		.personal
		{
			margin-left: 40px;
		}
		#features
		{
			border: 1px solid black;
			height: 250px;
		}
	#feat
		{
			border: 1px solid black;
			height: 230px;
		}
		.p
		{
			text-align: center;
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
       		<li><a style="color: white;" href="tetexan.php">TET EXAM</a></li>
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
			 	
	 			
	 	</div>
		
			<img src="img/04.jpg" height="400" width="1200" style="margin-top:5px;margin-left: -10px;"><br><br>			
			<div class="container-fluid" style="margin-left: -15px;">
				<div class="row">
					<div class="col-md-9">
						<div style="background-color:olive; padding-left: 10px; height:50px;font-size: xx-large;font-weight: bolder;color: white; ">CONTACT US
						</div>
						
						<table id="d" border="1" style="width: 875px;" >

							<th style="height:150px;" colspan="4"><h3 style="margin-left: 20px;">Head Office</h3>
							
								
									<b style="margin-left: 20px;">Badshah Bagh-</b>
									(Near G.G.I.C.) Maldahiya, Varanasi
									<br>
									<br>						
								
									<b style="margin-left: 20px;">Contact :</b>
									9335418689, 9335720660, 9838944881, 0542-6592777
								</th>
								<tr>

								<th colspan="4"><h3>Branch Office:</h3></th>
								</tr>
								<tr>
									<td colspan="2"><b>Ravindrapuri Extension-</b>(Near Alakhnanda Hospital) Durgakund<br>
										<p><b>Contact:</b>9307320884</p>
									</td>
									<td colspan="2"><b>Nevada-</b>D.L.W., Above P.N.B. Bank
										<p><b>Contact:</b>9235461002,</p>
									</td>
								</tr>
								<tr>
									<td colspan="2"><b>Gilat Bajar-</b> (Nav Rachana Convent School) Bhojubeer
										<p><b>Contact:</b>8808182082</p>
									</td>
									<td colspan="2"><b>Pandeypur-</b> Khajuri (Tulasi Niketan School) Varanasi
										<p><b>Contact</b>9235461003,</p>
									</td>
								</tr>
								<tr>
									<td colspan="2"><b>Bulanala – </b>Near Jain Bhavan Bulanala
										<p><b>Contact</b> 9235461004</p>
									</td>
									<td><b>Godauliya- </b>(Rameshwari Goyal School) Girjaghar
										<p><b>Contact</b> 9335418689</p>
									</td>
								</tr>
								<tr>
									<td colspan="4"><b>Meerapur-</b> Basahi (Near Gandhi Chabutara )</td>
								</tr>
								<td colspan="4"><b>Email:</b> sankalpeducation90@gmail.com</td>
						</table>								
				
						<h2 style="margin-left:20px; font-weight: bold; text-align: center;">Contact Form</h2>
						<fieldset >
							<legend style="margin-left: 50px; text-align: center;">  Personal</legend>
							<p class="p">
								<label class="field1">Name
									<span class="required">*</span>
									&nbsp;&nbsp;
									<input type="text" name="name">
								</label>
							</p>
							<p class="p">
								<label class="field1">Email
									<span class="required">*</span>
									&nbsp;&nbsp;
									<input type="email" name="email">
								</label>
							</p>
							<p class="p">
								<label class="field1">Phone
									<span class="required">*</span>
									&nbsp;&nbsp;
									<input type="text" maxlength="10" name="phone">
								</label>
							</p>
							<p class="p">
								<label class="field1">Address
									<span class="required">*</span>
									<textarea class="textarea-filed" style="width: 400px;height: 70px;" name="address"></textarea>
								</label>
							</p>
							<p class="p">
								<label class="field1" style="text-align: center;">Message
									<span class="required">*</span>
									<textarea class="textarea-filed" name="message" style="width: 400PX; height: 70PX;"></textarea>

								</label>
							</p>
							<br><br>
							<input type="submit" value="submit" name="submit" class="btn btn-primary" style="margin-left: 450px;">
						</fieldset>

						
												
					</div>
					<div class="col-md-3" id="features">

						
						<div style="background-color:olive; height:25px;padding-top: 3px; width: 250px; text-align: center;color: white;margin-left: 15px; margin-top: 10px; ">FEATURED VIDEO</div>
						<div><iframe width="260"  height="150" style="margin-top:30px; margin-left:15px ;" src="https://www.youtube.com/embed/b4VZanHmSgk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
					</div>
					<div class="col-md-3" id="features" style="margin-top: 20px;">
						<div style="background-color:olive; height:25px;padding-top: 3px; width: 250px; text-align: center;color: white;margin-left: 15px; margin-top: 10px; ">NEWS AND EVENTS</div>
						<p style="margin-top: 20PX;">Sankalp Pratibha Khoj Pariksha Result Publish on Latest Updates<hr>
							Sankalp Pratibha Khoj Pariksha<hr>
								Welcome to Sankalp Tutorials ..!!</p>
						
					</div>
					<div class="col-md-3" id="feat" style="margin-top: 20px;">
						<img src="img/c1.png"  style="margin-left: -10px;margin-top: 5px; height: 220px;">
						
						
					</div>
					</div>
					
				
				
			
				
																			
					</div>
					<div class="footer"> @Developed by RD & SG</div>
				</div>
			
		</div>
	</div>
</body>
</html>