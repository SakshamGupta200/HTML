
<?php
session_start();

if (!isset($_SESSION['num']))
 {
	$_SESSION['num']=1;
}
else
{
	echo "" ;
	echo "<h1 style='color:red'> like : ".$_SESSION['num']++ ."</h1>";
	
	
}

?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
	

	<form method="post">
		<span class="glyphicon glyphicon-thumbs-up" style="color: red; font-size: 30pt;  "></span> <br><br>
	
		<input type="submit" value="like" name="like">
	</form>
</body>