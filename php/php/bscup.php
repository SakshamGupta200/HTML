<?php
if (isset($_POST['x']))
 {
	$e=$_POST['num'];
	$b1=$_POST['num1'];
	$b2=$_POST['num2'];
	 $r= base_convert($e, $b1, $b2); 
	 

}

?>
<body>
	<form method="post">
		<p>enter number<input type="text" name="num"></p>
		<p>base1<input type="text" name="num1"></p>
		<p>base2<input type="text" name="num2"></p>
		<p>result<input type="text" value="<?php echo@$r; ?>" ></p>
		<input type="submit" value="power" name="x">
		
	</form>
</body>