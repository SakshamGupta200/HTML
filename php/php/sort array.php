<?php
$color = array( "red","yellow","green","blue");
 foreach ($color  as $c)
  {
    echo "$c <br>";
 }
 rsort($color);
 echo "<h1>sorted array</h1>";
 foreach ($color as $c)
  {
      echo "$c<br>";
 }
    
?>
