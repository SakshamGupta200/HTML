<?php
if (isset($_POST['x'])) 
{
$num=$_POST['n'];
$i=0;
for (;  ; ) 
{ 
	
	
		echo "$i<br>";
		$i++;
	
	
}
}

?>
<body>
	<form method="post">
	<p>Enter the number <input type="text" name="n"/></p>
	<input type="submit" name="x" value="print"/>
</form>
</body>
