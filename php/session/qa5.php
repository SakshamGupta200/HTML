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
	


if ( $ans =="James Arthur Gosling")
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
header("Location:qa6.php");
}
?>
<body>
	<form method="post">
		<p><h3>Q5. Father of java</h3></p>
		<p><input type="radio"  name="num" value="Dennis Ritchie">Dennis Ritchie</p>
		<p><input type="radio"  name="num" value="Yukihiro Matsumoto">Yukihiro Matsumoto</P>
		<p><input type="radio"  name="num" value="Guido Van Rossum">Guido Van Rossum</p>
		<p><input type="radio"  name="num" value="James Arthur Gosling">James Arthur Gosling</p>
		<input type="submit" value="check" name="ans">

	</form>
</body>