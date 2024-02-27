<?php
session_start();
?>
<?php
if (isset($_POST['ok'])) 
{
	$name=$_POST['x'];
	$_SESSION['num']=$name;
	header("Location:home.php");
}
?>
<body>
	<form method="post">
		<p>Enter user name<input type="text" name="x">

		<input type="submit" value="submit" name="ok"></p>
		
	</form>
</body>