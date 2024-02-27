<?php
if (isset($_POST['n'])) 
{
	$a=$_POST['x'];
	$b=$_POST['y'];
if(strcmp($a,$b)==0)
{
	echo"string are same";
}
else
{
	echo"string are diffrent";
}
}


?>
<body>
	<form method="post">
		<p>Enter first string<input type="text" name="x"></p>
		<p>Enter second string<input type="text" name="y"></p>
		<input type="submit" value="check" name="n">
	</form>
</body>