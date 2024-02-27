<?php
if (isset($_POST['ok'])) 
	{
		$name=$_POST['x'];
		echo "Welcome, $name";
	}	
?>
<body>
	<form method="post">
		<p>Enter your name<input type="text" name="x"/>
			<input type="submit" value="Display" name="ok"/>
		</p>
	</form>
</body>