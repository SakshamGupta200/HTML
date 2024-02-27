<?php
 function table()
 {
 	
 	echo "your table ";
 	
 }
 if(isset($_POST['t']))
 {
 	$a=$_POST['a'];
 	for ($i=1; $i <=10 ; $i++)
 	 { 
 		$b=$a*$i;
 		echo "$b","<br>";
 	}
 	
 
 }

?>
<body>
	<form method="post">
		<p>enter your number<input type="text" name="a"></p>
		
		
		<input type="submit" value="fullname" name="t">
		
	</form>
</body>