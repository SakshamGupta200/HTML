<?php
 function factorial($num)
 { 
 	 

 	$fact=1;
 	for ($i=1; $i<=$num ; $i++)
 	 { 
 		$fact=$fact*$i;
 	}
 	return $fact;
 }
 if (isset($_POST['x']))
 	 {

 		$n=$_POST['num'];
 		$res=factorial($n);
	 	echo "factorial=$res";	

 	}
 

?>
<body>
	<form method="post">
		<p>enter factorial<input type="text" name="num"></p>
		<p><input type="submit" value="factorial" name="x"></p>
		
	</form>
	
</body>