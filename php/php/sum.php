<?php
if (isset($_POST['add'])) 
	{
		$a=$_POST['x'];
		$b=$_POST['y'];
		$sum=$a+$b;
		
	}	
?>
<body>
	<form method="post">
		<p>Enter first number<input type="text" name="x"/></p>
			<p>Enter second number<input type="text" name="y"/></p>
			<p>Result<input type="text" value="<?php echo @$sum;?>" /></p>
			<input type="submit" value="Sum" name="add"/>
		
	</form>
</body>