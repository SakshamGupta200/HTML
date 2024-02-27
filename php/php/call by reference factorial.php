<?php

function display($num)
{
	if ($num == 0) 
	{
		return -1;
	}
	if($num== 1)
	{
		return 1;

	}
	return $num*display($num -1);
}
if (isset($_POST['x']))
 {
	$n=$_POST['num'];
 		$res=display($n);
	 	echo "display=$res";	
}

?>
	<body>
		<form method="post">
			<p>enter factorial number<input type="text" name="num"></p>
			<input type="submit" value="print" name="x">
			
		</form>
	</body>
