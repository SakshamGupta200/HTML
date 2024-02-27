<?php
if (isset($_POST['add'])) 
	{
		$a=$_POST['x'];
		$b=$_POST['y'];
		$c=$a+$b;
		
	}	
	if (isset($_POST['mul'])) 
	{
		$a=$_POST['x'];
		$b=$_POST['y'];
		$c=$a*$b;
		
	}	
?>
<body>
	<form method="post">
		<p>Enter first number<input type="text" name="x"/></p>
			<p>Enter second number<input type="text" name="y"/></p>
			<p>Result<input type="text" value="<?php echo @$c;?>" />
			<input type="submit" value="Sum" name="add"/>
			<input type="submit" value="multiply" name="mul"/>
		</p>
	</form>
</body>