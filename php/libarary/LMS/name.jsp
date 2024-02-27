<!DOCTYPE html>
<html>
<head>
	<title>Use of scriplet tag</title>
</head>
<body>
	<h2>Example of scriptlet tag</h2>
	<%
	String name=request.getparameter("unname");
	out.print("Welcome ,"+name);
	%>
</body>
</html>