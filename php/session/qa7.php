<?php
session_start();
?>
<?php
if (isset($_POST['ans']))
 {
 	$right=$_SESSION['R'];
 	$wrong=$_SESSION['W'];
 	$marks=$_SESSION['M'];
	$ans=$_POST['num'];
	


if ( $ans =="Wes McKinney")
 {

	echo "<h2>correct answer</h2>";
	$right++;
	$marks+=5;

}
else
{
	echo "<h3>incorrect try again !</h3>";
	$wrong++;
	$marks-=2;
	
}
	$_SESSION['R']=$right;
	$_SESSION['W']=$wrong;
	$_SESSION['M']=$marks;
header("Location:qa8.php");
}
?>
<body>
	<form method="post">
		<p><h3>Q7. Father of panda</h3></p>
		<p><input type="radio"  name="num" value="Wes McKinney">Wes McKinney</p>
		<p><input type="radio"  name="num" value="Rasmus Lerdorf">Rasmus Lerdorf</P>
		<p><input type="radio"  name="num" value="Guido Van Rossum">Guido Van Rossum</p>
		<p><input type="radio"  name="num" value="Anders Hejlsberg">Anders Hejlsberg</p>
		<input type="submit" value="check" name="ans">

	</form>
</body>