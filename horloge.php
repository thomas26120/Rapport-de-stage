<html>
    <head>
        <title>Horloge</title>
    </head>

<?php
$jour = date("w");
		if ($jour==O)
		{
			$jour = 'Dimanche';
		}elseif ($jour==1)
		{
			$jour = 'Lundi';
		}elseif ($jour==2)
		{
			$jour = 'Mardi';
		}elseif ($jour==3)
		{
			$jour = 'Mercredi';
		}elseif ($jour==4)
		{
			$jour = 'Jeudi';
		}elseif ($jour==5)
		{
			$jour = 'Vendredi';
		}elseif ($jour==6)
		{
			$jour = 'Samedi';
		}
		$datejour = date("d");
		$mois = date("m");
		if ($mois==01)
		{
			$mois = 'Janvier';
		}elseif ($jour==02)
		{
			$mois = 'Février';
		}elseif ($jour==03)
		{
			$mois = 'Mars';
		}elseif ($jour==04)
		{
			$mois = 'Avril';
		}elseif ($jour==05)
		{
			$mois = 'Mai';
		}elseif ($jour==06)
		{
			$mois = 'Juin';
		}elseif ($jour==07)
		{
			$mois = 'Juillet';
		}elseif ($jour==08)
		{
			$mois = 'Août';
		}elseif ($jour==09)
		{
			$mois = 'Septembre';
		}elseif ($jour==10)
		{
			$mois = 'Octobre';
		}elseif ($jour==11)
		{
			$mois = 'Novembre';
		}elseif ($jour==12)
		{
			$mois = 'Décembre';
		}
		$annee = date("Y");
		$heure = date("G");
		$minute = date("i");
		$seconde = date("s");
		echo 'On est le '.$jour.' '.$datejour.' '.$mois.' '.$annee.' et il est '.$heure.'h '.$minute.'min '.$seconde.'s';




$delai=1;
$url='http://127.0.0.1/Rapport/horloge.php';
header("Refresh: $delai;url=$url");
 ?>