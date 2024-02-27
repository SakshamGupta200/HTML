<?php
if (isset($_POST['n'])) 
{
	$s=$_POST['x'];
	echo strrev ($s);
}	
?>
<body>
	<form method="post">
		<p>Enter first string<input type="text" name="x"></p>
		<input type="submit" value="check" name="n">
	</form>
</body>