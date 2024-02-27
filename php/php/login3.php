<?php
if (isset($_POST['login']))
 {
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		if ($uname=="rahul" && $pass=="1234")
		 {
			header("location:home1.php");
		}
		elseif ($uname=="saksham" && $pass=="202020") 
		{
			header("location:home1.php");
		}
		else
		{
			echo "invalid user na,e or password";
		}
}



?>
<body>
	<form method="post">
		<p>USER NAME<input type="text" name="uname" placeholder="put ur id"></p>
		<p>PASSWORD<input type="passwor" name="pass" placeholder="********"></p>
		
		<input type="submit" value="login" name="login">
		
	</form>
</body>