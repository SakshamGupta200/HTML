
<?php

	if(isset($_POST['ok']))
	{
$num=$_POST['n'];
for($i=1;$i<=$num;$i++)
{
	for($j=1;$j<=$num;$j++)
	{
		echo"<big><b>*</b></big>";
	}
	echo"<br>";
}

}
?>
<body>
	<form method="post">
		<p> Enter Your Number::<input type="text" name="n"></p>
		<p><input type="submit" name="ok" value="submit"></p>
		
	</form>
</body>