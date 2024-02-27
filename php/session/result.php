
<?php
session_start();
?>
<?php
	$right=$_SESSION['R'];
 	$wrong=$_SESSION['W'];
 	$marks=$_SESSION['M'];
 	if ($_SESSION['M']>=25)
 	 {
 		$str= "Congratulation you passed";
 	}
 	else
 	{
 		$str= "Sorry, you failed ";
 	}
?>
<body>
	<center style="margin-top: 40px;">
		
		<div>
			<h1>Quiz Result</h1>
		</div>
		<table    width="400" >
			<tr style="height:40px";>
				<td colspan="3"   style="font-weight: bold; ">Your score </td>
				<td> <span><?php echo $marks;?></span></td>
			</tr>
			<tr style="height:40px">
				<td colspan="3"  style="font-weight: bold; ">Max score </td>
				<td> <span>50</span></td>
			</tr>
			<tr style="height:40px">
				<td colspan="3"  style="font-weight: bold; ">Question correct </td>
				<td> <span><?php echo $right;?></span></td>
			</tr>
			<tr style="height:40px">
				<td colspan="3"  style="font-weight: bold; ">Number of Question </td>
				<td> <span>10</span></td>
			</tr>
			<tr style="height:40px">
				<td colspan="3"  style="font-weight: bold; ">Wrong Answer </td>
				<td> <span><?php echo $wrong;?></span></td>
			</tr>
			<tr style="height:40px">
				<td colspan="3" style="font-weight: bold; "> Number of quiz attemptets </td>
				<td> <span><?php echo $right + $wrong;?></span></td>
			</tr>
		</table>

		
		<a href="qa1.php"> <input type="submit" value="Continue" name=""></a>
		<input type="submit" value="Review Quiz" >
		<br>
		<br>
		<span style="color:indigo;font-size:xx-large;font-weight: bold;"><?php echo $str; ?></span>
	</center>
	
</body>