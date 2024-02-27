<?php
if (isset($_POST['ok']))
 {
$uname=$_POST['uname'];
$pass=$_POST['pass'];
	setcookie("name",$uname);
	header("location:home.php");
}
?>
<body>
	<form method="post">
		<p>user name <input type="text" name="uname"></p>
		<p>password<input type="password" name="pass"></p>
		<input type="submit" value="login" name="ok">
		
	</form>
</body>