<?php
if (isset($_POST['x'])) 
{
	$num=$_POST['n'];
	$fact=1;
for ($i=1; $i<=$num ; $i++) 
{ 
	$fact=$fact*$i;
}
}

?>
<body>
	<form method="post">
	<p>Enter the number <input type="text" name="n"/><br></p>
	<p>Result<input type="text" value="<?php echo @$fact;?>"></p>
	<input type="submit" name="x" value="print"/>
</form>
</body>
