<?php
 function ug($name,$course="bca")
 {
 	
 	}
 	if (isset($_POST['x']))
 	 {

 	 	$n=$_POST['name'];
 	 	$c=$_POST['course'];
 	 	echo "$n  &nbsp";
 	 	echo "$c";

 }
?>
<body>
	<form method="post">
		<p>enter name<input type="text" name="name"></p>
		<p>enter course<input type="text" name="course"></p>
		<input type="submit" value="print" name="x">		
	</form>
</body>
