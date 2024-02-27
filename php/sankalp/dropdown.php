<?php
?>
<!DOCTYPE html>
<html>
<head>

<style>
.dropdown
 {
  position: relative;
  display: inline-block;
}

.dropdown-content
 {
  display: none;
  position: absolute;
  
  min-width:50px;
  box-shadow: 5px 5px 5px #111;
  z-index: 1;
}

.dropdown-content a
 {
  color: black;
  padding: 10px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover
 {
 	background-color: #ddd;
 }

.dropdown:hover .dropdown-content 
{
	display: block;
}

.dropdown:hover
  {
  	background-color: #3e8e41;
  }
</style>
</head>
<body>



<div class="dropdown">
  <button>Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>

</body>
</html>
