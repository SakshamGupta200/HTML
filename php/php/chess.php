
<?php

	if(isset($_POST['ok']))
	{
$num=$_POST['n'];
echo"<table>";
for($i=1;$i<=$num;$i++)
{
	echo"<tr>";
	for($j=1;$j<=$num;$j++)
	{
		$a=$i+$j;
		if ($a%2==0) {
			echo "<td style='height:50px; width:50px;background-color:black;'></td>";
			
		}
		else
		{
			echo "<td style='height:50px; width:50px;background-color:whitesmoke;'></td>";
		}
	}
	echo"</tr>";
}
echo"</table>";
}
?>
<body>
	<form method="post">
		<p> Enter Your Number::<input type="text" name="n"></p>
		<p><input type="submit" name="ok" value="submit"></p>
		
	</form>
</body>