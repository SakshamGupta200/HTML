<?php
session_start();

if (!isset($_SESSION['num']))
 {
	$_SESSION['num']=1;
}
else
{
	echo "<h1 style='color:red' >page like :".$_SESSION['num']++ ."</h1>";
	
	
}

?>
<body>
	<form method="post">
		<input type="submit" value="like" name="like">
	</form>
</body>