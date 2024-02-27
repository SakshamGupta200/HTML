<?php
if(isset($_POST['natural']))
{
	$num=$_POST['n'];
	$i=1;
	while ($i<=$num)
	 {
		echo "<br>$i</br>";
		$i++;
	}
}
?>
<body>
	<form method="post">
		<p>enter the number<input type="text" name="n"/></p>
		<input type="submit" name="natural" value="ok"/>
		
	</form>
</body>