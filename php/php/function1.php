<?php
 function fullname($fname,$lname,$email)
 {
 	$fullname=$fname." ".$lname." ".$email;
 	echo "welcome,$fullname";

 	
 }
 if(isset($_POST['fb']))
 {
 	$uname=$_POST['uname'];
 	
 	$lname=$_POST['lname'];
 	$email=$_POST['email'];
 	fullname($uname,$lname,$email);
 
 }

?>
<body>
	<form method="post">
		<p>enter your firstname<input type="text" name="uname"></p>
		<p>entr your lastname<input type="text" name="lname"></p>
		<p>enter your enmail<input type="text" name="email"></p>
		
		<input type="submit" value="fullname" name="fb">
		
	</form>
</body>