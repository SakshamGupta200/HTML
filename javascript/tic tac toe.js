var b1,b2,b3,b4,b5,b6,b7,b8,b9,txt
var n=0
function B1()
{
	b1=document.getElementById("b1").value
	if (n<9 && b1=="") 
	{
		if (n%2==0) 
		{
			document.getElementById("b1").value="X"
			txt="X"
		}
		else
		{
			document.getElementById("b1").value="O"
			txt="O"
		}
		b1=document.getElementById("b1").value
		n++
	}
	if (b2==txt && b3==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (b4==txt && b7==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (b5==txt && b9==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (n==9)
	{
		alert ("Game draw")
	}
}

function B2()
{
	b2=document.getElementById("b2").value
	if (n<9 && b2=="") 
	{
		if (n%2==0) 
		{
			document.getElementById("b2").value="X"
			txt="X"
		}
		else
		{
			document.getElementById("b2").value="O"
			txt="O"
		}
		b2=document.getElementById("b2").value
		n++
	}
	if (b1==txt && b3==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (b5==txt && b8==txt) 
	{
		alert("Player"+txt+"won")
	}
	
	else if (n==9)
	{
		alert ("Game draw")
	}
}

function B3()
{
	b3=document.getElementById("b3").value
	if (n<9 && b3=="") 
	{
		if (n%2==0) 
		{
			document.getElementById("b3").value="X"
			txt="X"
		}
		else
		{
			document.getElementById("b3").value="O"
			txt="O"
		}
		b3=document.getElementById("b3").value
		n++
	}
	if (b1==txt && b2==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (b5==txt && b7==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (b6==txt && b9==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (n==9)
	{
		alert ("Game draw")
	}
}

function B4()
{
	b4=document.getElementById("b4").value
	if (n<9 && b4=="") 
	{
		if (n%2==0) 
		{
			document.getElementById("b4").value="X"
			txt="X"
		}
		else
		{
			document.getElementById("b4").value="O"
			txt="O"
		}
		b4=document.getElementById("b4").value
		n++
	}
	if (b1==txt && b7==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (b5==txt && b6==txt) 
	{
		alert("Player"+txt+"won")
	}
	
	else if (n==9)
	{
		alert ("Game draw")
	}
}

function B5()
{
	b5=document.getElementById("b5").value
	if (n<9 && b5=="") 
	{
		if (n%2==0) 
		{
			document.getElementById("b5").value="X"
			txt="X"
		}
		else
		{
			document.getElementById("b5").value="O"
			txt="O"
		}
		b5=document.getElementById("b5").value
		n++
	}
	if (b1==txt && b9==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (b2==txt && b8==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (b4==txt && b6==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (b3==txt && b7==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (n==9)
	{
		alert ("Game draw")
	}
}

function B6()
{
	b6=document.getElementById("b6").value
	if (n<9 && b6=="") 
	{
		if (n%2==0) 
		{
			document.getElementById("b6").value="X"
			txt="X"
		}
		else
		{
			document.getElementById("b6").value="O"
			txt="O"
		}
		b6=document.getElementById("b6").value
		n++
	}
	
	 if (b3==txt && b9==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (b4==txt && b5==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (n==9)
	{
		alert ("Game draw")
	}
}

function B7()
{
	b7=document.getElementById("b7").value
	if (n<9 && b7=="") 
	{
		if (n%2==0) 
		{
			document.getElementById("b7").value="X"
			txt="X"
		}
		else
		{
			document.getElementById("b7").value="O"
			txt="O"
		}
		b7=document.getElementById("b7").value
		n++
	}
	if (b3==txt && b5==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (b4==txt && b1==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (b8==txt && b9==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (n==9)
	{
		alert ("Game draw")
	}
}

function B8()
{
	b8=document.getElementById("b8").value
	if (n<9 && b8=="") 
	{
		if (n%2==0) 
		{
			document.getElementById("b8").value="X"
			txt="X"
		}
		else
		{
			document.getElementById("b8").value="O"
			txt="O"
		}
		b8=document.getElementById("b8").value
		n++
	}
	if (b2==txt && b5==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (b7==txt && b9==txt) 
	{
		alert("Player"+txt+"won")
	}
	
	else if (n==9)
	{
		alert ("Game draw")
	}
}

function B9()
{
	b9=document.getElementById("b9").value
	if (n<9 && b9=="") 
	{
		if (n%2==0) 
		{
			document.getElementById("b9").value="X"
			txt="X"
		}
		else
		{
			document.getElementById("b9").value="O"
			txt="O"
		}
		b9=document.getElementById("b9").value
		n++
	}
	if (b3==txt && b6==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (b1==txt && b5==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (b7==txt && b8==txt) 
	{
		alert("Player"+txt+"won")
	}
	else if (n==9)
	{
		alert ("Game draw")
	}
}
		function reset()
		{
			document.getElementById("b1").value=" "
			document.getElementById("b2").value=" "
			document.getElementById("b3").value=" "
			document.getElementById("b4").value=" "
			document.getElementById("b5").value=" "
			document.getElementById("b6").value=" "
			document.getElementById("b7").value=" "
			document.getElementById("b8").value=" "
			document.getElementById("b9").value=" "
		}