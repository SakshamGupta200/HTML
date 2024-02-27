<?php
if (isset($_POST['x'])) 
{
	
	for ($i=1; $i<=10 ; $i++) 
	{
	if ($i==10) 
	{
	 	echo "$i";
	} 
	else
	{
		echo"$i-";
	}	
	}
}

?>
<body>
	<form method="post">
	<p>Enter the number 
	
	<input type="submit" name="x" value="print"/>
</form>
</body>
