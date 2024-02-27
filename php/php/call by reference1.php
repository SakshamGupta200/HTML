<?php
 function add(...&n)
 {
 	$sum=0;
 	foreach ($n as &x)
 	 {
 		$sum=$sum+$x;
 	}
 	echo "sum=$sum<br>";
 }
 add(10,20);
 add(10,20,30);
 add(10,20,30,40);
 add(10,20,30,40,50);
 add(10,20,30,40,50,60);

?>
