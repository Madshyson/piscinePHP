#!/usr/bin/php
<?PHP
$fp = fopen('php://stdin', 'r');
while(1)
{
	echo "Entrez un nombre: ";
	$nb = fgets($fp, 1024);
	if ($nb == FALSE)
	{
		echo "^D\n";
		break ;
	}
	$nb = trim($nb);
	if (is_numeric($nb))
	{
		if ($nb % 2 == 0)
			echo "Le chiffre ".$nb." est Pair\n";
		else
			echo "Le chiffre ".$nb." est Impair\n";
	}
	else
	{
		echo "'".$nb."' n'est pas un chiffre\n";
	}
}
?>