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
function clean($str)
{ 
	$str = preg_replace("/\t/", " ", $str);
	$str = epur_str($str);
	return($str);
}
if ($argc > 1)
	echo clean($argv[1])."\n";
?>