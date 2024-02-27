<?php
if (isset($_POST['y'])) 
{
	$a=$_POST['x'];
	echo binhex($a);
}
if (isset($_POST['z'])) 
{
	$b=$_POST['x'];
	echo decbin($b);
}
?>
<body>
	<form method="post">
		<input type="text" name="x">
		<input type="submit" name="y" value="bindec">
		<input type="submit" name="z" value="decbin">
	</form>
</body>