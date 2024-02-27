<?php
if (isset($_POST['verify'])) 
{
	$x=$_POST['a'];
	$y=$_POST['b'];
	$z=$_POST['c'];
	if ($x>$y && $x>$z) 
	{
		echo "first is greater no.";
	}
	else if ($y>$x && $y>$z) 
	{
		echo "second is greater no";
	}
	else
	{
		echo "third is greater no.";
	}
	
}
?>
<body>
	<form method="post">
		<p>Enter first no. <input type="text" name="a"></p>
		<p>Enter second no. <input type="text" name="b"></p>
		<p>Enter third no. <input type="text" name="c"></p>
		<input type="submit" value="check" name="verify">
	</form>
</body>