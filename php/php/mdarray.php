<?php
$record=array(
	array(1,"rahul","vns"),
	array(2,"pankal","mirzapur"),
	array(3,"suman","noida")
);
for ($i=0; $i <3 ; $i++)
 { 
	for ($j=0; $j <3 ; $j++) { 
		echo "&nbsp";
		echo $record[$i][$j] ;
	}
	echo "<br>";
}
?>