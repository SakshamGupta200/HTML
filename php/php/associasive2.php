<?php
if (isset($_POST['x']))
 {
	$n=$_POST['y'];
	$f=0;
	
	$color=array("1" => "red","2"=>"blue","3"=>"green","4"=>"yellow","5"=>"lime","6" =>"brown","7"=>"gray","8"=>"azure","9"=>"chocolate brown","10"=>"darkgreen" );

	foreach ($color as $k =>$v)
	 {
		if ($k==$n)
		 {
		$f=1;
		}
		

	}
	if ($f==1)
	 {
		echo"<h2>$v</h2>";
	}
	else
	{
		echo "<h2>invalid key?</h2>";
	}


	
}
	
?>
<body>
	<form method="post">
		<p>enter any key<input type="text" name="y"></p>
		<input type="submit" value="print" name="x">
		
	</form>
</body>