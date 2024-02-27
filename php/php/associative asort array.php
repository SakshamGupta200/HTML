<?php
$color = array( "a" =>"red", "b" =>"yellow", "c" =>"green", "d"=> "blue");
 foreach ($color  as $c=>$a)
  {
    echo "$c=$a <br>";
 }
 asort($color);
 echo "<h1> associative asorted array</h1>";
 foreach ($color as $c=>$a)
  {
      echo "$c=$a<br>";
 }
    
?>
