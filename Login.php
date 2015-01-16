<!DOCTYPE html>
<html>
    <head>
    	
        <meta charset="utf-8" />
 <style>
            p
            {
                color: blue;
                function verif_champ(champ)

            }
        </style>
        <title>Login</title>
    </head>
		<body background="red">
			<p><h2>Entre votre nom pour acceder au site.</h2></p>
		  <p>
		  	<form method="get" action='index.php'> 
		  		<FORM>
				<INPUT type="checkbox" name="choix1" value="1"> cocher pour acceder au site! (obligatoire)<br>
					<br>
					<br>
		  		<input type="text" name="Nom" id="Nom" placeholder="Entre votre nom!" size="30" maxlength="35" />
       			<!-- <label for="pass">Votre mot de passe :</label>
       			<input type="password" name="pass" id="pass" placeholder="Ex : ********" size="20" maxlength="20" /> -->       
		  		<input type="submit" name="envoyer" value="Accepter" /> <br>
		  		</form>
		  		
		  		
		  			
	  	</body>
</html>

<?php
$delai=30;
$url='http://127.0.0.1/Rapport/Login.php';
header("Refresh: $delai;url=$url");
 ?>
 
 
 
     <div id="menu">
    <h3><div class="menu_1">
    <ul>
    <li><a href="index.php" title="Accueuil">Accueil</a></li>
    