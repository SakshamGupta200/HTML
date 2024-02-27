<?php
if (isset($_POST['x'])) 
{
	 $day=$_POST['day'];
	 switch ($day) 
	 {
	 	
	 	case '0':
	 		echo "Sunday";
	 		break;
	 	case '1':
	 		echo "monday";
	 		break;
	 	case '2':
	 	echo "tuesday";
	 	break;	
	 	
	 	case '3':
	 		echo "Wednesday";
	 		break;
	 		case '4':
	 		echo "thursday";
	 		break;
	 		case '5':
	 		echo "friday";
	 		break;
	 		case '6':
	 		echo "Saturday";
	 		break;
	 	
	 }
}
?>
<body>
	<form method="post">
	<p>Enter the number <input type="text" name="day"/></p>
	<input type="submit" name="x" value="ok"/>
</form>
</body>
