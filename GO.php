<html>
<head>
		<P><h3>Bienvenue, pour continuer veuilez cocher la case et entre votre nom! Merci</h3></P>
	<title>Login</title>
<script type="text/javascript">
<!--

function tst_cbx()
{
	// On peut aussi utiliser : ref=document.getElementById('demo');
	/*ref=document.forms['demo'];
	result=false;
	alert(document.forms['demo'].elements['cbx'].checked);
	for (i=0; i<ref.cbx.length; i++)
	{
		if (ref.cbx[i].checked) 
		{
			result=true;
			break;
		}
		
	}*/

	result = document.forms['demo'].elements['cbx'].checked;

	window.alert( result ? "Clicer sur Ok pour acceder au site":"Cocher la case et ente votre nom pour continuer!!" );

	return result ;
}
//-->
	</script>

	</head>
		<body>

				<form id="demo" name="demo" onsubmit="return tst_cbx();" action='index.php'>
				<input type="checkbox" name="cbx">cocher pour continuer!</p>         
				<input type="text" name="pseudo" id="pseudo" placeholder="Entre votre nom ICI !" size="30" maxlength="35" />
               	<input type="submit" value="Ok"> <br>

               	
				</form>
				
				</body>
	</html>
	
