<?php
$num;
for ($num=1; $num<=50 ; $num++) 
{ 
	if ($num%3==0 && $num%5==0) 
	{
		echo "FIZZBUZZ"."&nbsp";
	}
	elseif ($num%3==0) 
	{
		echo "FIZZ"."&nbsp";
	}
	elseif ($num%5==0) 
	{
		echo "BUZZ"."&nbsp";
	}
	else
	{
		echo $num ."&nbsp";
	}
}
	
?>
