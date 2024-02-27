<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>drop</title>
	<link rel="stylesheet" type="text/css" href="css1/bootstrap.min.css">
	<style type="text/css">
		#nav ul
		{
			display: none;
			background-color: #f90;
			position: absolute;
			top: 100%;

		}
		#nav li:hover ul
		{
			display: block;
		}
		#nav,#nav ul
		{
			margin: 0px;
			padding: 0px;
			list-style-type: none;
		}
		#nav
		{
			height: 20px;
			min-height: 0px;
			background-color: indigio;
			padding-left: 250px;
		}
		#nav li
		{
			float: left;
			position: relative;
			height: 100%;
		}
		#nav ul li :a
		{
			display: block;
			padding: 5px;
			width: 100px;
			text-decoration: none;
			text-align: center;
			color: azure;
		}
		#nav ul li 
		{
			float: left;
		}

		#nav li:hover 
		{
			background-color: lightgreen;
			border-radius: 20px 5px;
		}
		#nav ul li :hover
		{
			background-color: maroon;
		}

	</style>
</head>
<body>
       <ul id="nav">
	       <li><a href="#">home</a></li>
	       <li><a href="#">about</a></li>
	       <li><a href="#">contact</a></li>
	       <li><a href="#">course</a>
       <ul>
       		<li><a href="#">java</a></li>
       		<li><a href="#">php</a></li>
       		<li><a href="#">python</a></li>
       		<li><a href="#">.net</a></li>
       		<li><a href="#">ruby</a></li>
       	</ul>
       </li>
       <div>
       	<a href="#">admin</a>
       	<ul>
       		<li><a href="#">login</a></li>
       		<li><a href="#">logout</a>
       	</ul>
       </li>
   </div>
</ul>
   

</body>
</html>