#!/usr/bin/php
<?PHP

function ft_split($str)
{
    $split = explode(" ", "$str");
    $split = array_filter($split);
    $split = array_values($split);
    return($split);
}

$i = 1;
$big_tab = array();

while ($i < $argc)
{
	$tab = ft_split($argv[$i]);
	foreach($tab as $val)
		array_push($big_tab, $val);
    $i++;
}
asort($big_tab);
foreach($big_tab as $val)
	print($val."\n");