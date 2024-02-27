<?php
$color = array( "a" =>"red", "b" =>"yellow", "c" =>"green", "d"=> "blue");
 foreach ($color  as $c=>$a)
  {
    echo "$c=$a <br>";
 }
 arsort($color);
 echo "<h1> associative decending order arsorted array</h1>";
 foreach ($color as $c=>$a)
  {
      echo "$c=$a<br>";
 }
    
?>
