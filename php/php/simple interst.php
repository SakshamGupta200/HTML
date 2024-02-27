<?php
 function simpleintrest($pa,$rate,$time)
 {
 $sa=($pa*$rate*$time)/100;
 return $sa;
 }
 if (isset($_POST['x']))
  {
 	$p=$_POST['principal'];
 	$r=$_POST['rate'];
 	$t=$_POST['time'];
 	$res=simpleintrest($p,$r,$t);
 	
 }
?>
<body>
	<form method="post">
		<p>enter primcipal ammount<input type="text" name="principal"></p>
		<p>enter rate<input type="text" name="rate"></p>
		<p>enter time<input type="text" name="time"></p>
		<p>si<input type="text" value="<?php echo @$res;?>"></p>
		<input type="submit" value="print" name="x">
		
	</form>
</body>
