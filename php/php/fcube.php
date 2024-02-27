<?php
function cube($n)
{
	return $n*$n*$n;
}
function table($num)
{
	for ($i=1; $i <=10 ; $i++)
	 { 
		$x=$num*$i;
		echo cube($x);
		echo "<br>";
	}
	
}
if (isset($_POST['x']))
 {
	
	
	$n=$_POST['num'];
	$m=cube($n);
	$t=table($num);
	echo "$m $t";

}
?>
<body>
	<form method="post">
		<p>enter no<input type="text"  name="num"></p>
		<input type="submit" value="print" name="x"/>

		
	</form>
</body>