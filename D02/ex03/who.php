#!/usr/bin/php
<?PHP

function whotrim($tab)
{
	$str = $tab['a']." ".$tab['c']."  ".date('M j H:i', $tab['f1'])."\n";
	return($str);
}

date_default_timezone_set('Europe/Paris');
$file = fopen("/var/run/utmpx", "r");
$i = 0;
while ($utmpx = fread($file, 628))
{
	$unpack = unpack("a256a/a4b/a32c/id/ie/If1/If2/a256g/i16h", $utmpx);
	if ($unpack['e'] == 7)
		$pack_tab[$i] = $unpack;
	$i++;
}
asort($pack_tab);
foreach ($pack_tab as $tab)
{
	print(whotrim($tab));
}
?>