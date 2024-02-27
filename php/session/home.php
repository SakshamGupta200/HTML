<?php
session_start();
session_destroy();
?>
<?php
#echo "Welcome,".$_SESSION['num']; 
?>
<a href="destroy.php">delete session</a>