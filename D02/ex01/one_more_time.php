#!/usr/bin/php
<?PHP
$nbd = array(" 01 ", " 02 ", " 03 ", " 04 ", " 05 ", " 06 ", " 07 ", " 08 ", " 09 ");
$nb = array(" 1 ", " 2 ", " 3 ", " 4 ", " 5 ", " 6 ", " 7 ", " 8 ", " 9 ");
$monthl = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
$monthu = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
$monthe = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
$dayl = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
$dayu = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
$daye = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

$str = $argv[1];

date_default_timezone_set('Europe/Paris');

$str = strtr($str, array_combine($nbd, $nb));
$str = strtr($str, array_combine($monthl, $monthu));
$str = strtr($str, array_combine($monthu, $monthe));
$str = strtr($str, array_combine($dayl, $dayu));
$str = strtr($str, array_combine($dayu, $daye));
$tmp = strtotime($str);
$strbis = date('l d F Y H:i:s', $tmp);
if ($strbis == $str)
	print($tmp."\n");
else
	print("Wrong Format\n");

?>