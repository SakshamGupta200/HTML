
<?php
if (isset($_POST['x']))
{
	$u=$_POST['u1'];
	$p=$_POST['p1'];
	if ($u=="Saksham" && $p=="12345") 
	{
		echo "Hello Saksham";
	}
	elseif ($u=="Rahul"&&$p=="QWERTY") 
	{
		echo "Hello Rahul";
	}
	else
	{
		echo "invalid user/pass";
	}
}
?>
<body>
	<form method="post">
		<p>Enter first user id<input type="text" name="u1"></p>
		<p>Enter first pasword<input type="password" name="p1"></p>
		<input type="submit" name="x" value="login">
	</form>
</body>