<?php
if ($_COOKIE['name'])
 {
	echo "WElCOME ,".$_COOKIE['name'];
}
if (isset($_POST['next']))
 {
 	$newname="mr/miss".$_COOKIE['name'];
 	setcookie("name"," ",time()-5);
 	header("location:service.php");
 	setcookie("name",$newname);

 	header("location:service.php");
}
?>
<body>
	<form method="post">
		<input type="submit" value="next" name="next">
		<input type="submit" value="delete" name="DEL">
		
	</form>
</body>
