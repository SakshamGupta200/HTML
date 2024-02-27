<?php
if (isset($_POST['x']))
 {
	$b=$_POST['num'];
	$p=$_POST['num1'];
	 $r= pow ($b, $p);
	 

}

?>
<body>
	<form method="post">
		<p>base<input type="text" name="num"></p>
		<p>power<input type="text" name="num1"></p>
		<p>result<input type="text" value="<?php echo@$r; ?>" ></p>
		<input type="submit" value="power" name="x">
		
	</form>
</body>