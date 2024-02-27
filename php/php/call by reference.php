<?php
 function demo(&$x,&$y)
 {
 	$x++;
 	$y++;
 	echo "value of x & y with in function <br>";
 	echo "value of x=$x <br>";
 	echo "value of y=$y <br>";
 	
 }
 $x=5;
 $y=10;
 demo($x,$y);
 echo "value of x & y after function call <br>";
 echo "value of x=$x <br>";
 echo "value of y=$y <br>";
?>
