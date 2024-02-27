<?php
$list = array("a"=>"rahul","b"=>"rohit" );


if (isset($_POST['ok']))
 {
 	$n=$_POST['x'];
 	
 	if (array_key_exists($n, $list))
 	 {
 		echo "its exits";
 	}
 	else
 	{
 		echo "not exits";
 	}


}
?>
<body>
	<form method="post">
		<p>enter any key <input type="text" name="x"></p>
		<input type="submit" value="print" name="ok">
	</form>
</body>