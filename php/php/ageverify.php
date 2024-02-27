<?php
if (isset($_POST['verify'])) 
{
	$age=$_POST['age'];
	if ($age>=18 && $age<=70) 
	{
		echo "valid for vote";
	}
	else
	{
		
		echo "not valid for vote";
	}
	
}
?>
<body>
	<form method="post">
		<p>Enter Your age <input type="text" name="age"></p>
		<input type="submit" value="check" name="verify">
	</form>
</body>