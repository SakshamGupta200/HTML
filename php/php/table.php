<?php
if (isset($_POST['x'])) 
{
$num=$_POST['n'];

for ($i=1;$i<=10;$i++) 
{

	echo $num*$i;
	echo "<br>";	
}
for ($i=10;$i>=1;$i--) 
{

	echo $num*$i;
	echo "<br>";	
}
}

?>
<body>
	<form method="post">
	<p>Enter the number <input type="text" name="n"/></p>
	<input type="submit" name="x" value="print"/>
</form>
</body>
