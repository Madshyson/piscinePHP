#!/usr/bin/php
<?PHP

function epur_str($str)
{
	$epur = explode(" ", "$str");
	$epur = array_filter($epur);
	$epur = array_values($epur);
	$str = implode(" ", $epur);
	return($str);
}
print(epur_str($argv[1])."\n");

?>