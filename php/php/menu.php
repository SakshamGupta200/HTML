<?php
?>

<html>
<head>
	<meta charset="utf-8">
	<title>menu</title>
	
	<style type="text/css">
		#nav
		{
			margin: 0px;
			padding: 0px;
			width: 750px;
			height: 30px;
			background-color: darkgoldenrod;
			text-align: center;
			border-radius: 20px 5px;
			border: 5px solid crimson;
			list-style-type: none;
			

		}
		#nav a 
		{
			color:darkturquoise ;
			font-size: large;
			font-weight: bolder;
			padding: 5px 10px;
			display: inline-block;
			text-decoration: none;
			width: 120px;
			float: left ;

		}
		#nav a:hover
		{
			border-radius: 20px 5px;
			background-color: indigo;
			color: azure;
		}
	</style>
</head>
<body> 
	<ul id="nav">
	<li><a href="#">home</a></li>
	<li><a href="#">about</a></li>
	<li><a href="#">contact</a></li>
	<li><a href="#">help</a></li>
	<li><a href="#">download</a></li>
</ul>

</body>
</html>