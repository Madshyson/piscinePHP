#!/usr/bin/php
<?PHP

function rostring($str)
{
	$ros = explode(" ", $str);
    $ros = array_filter($ros);
    $ros = array_values($ros);
	array_push($ros, $ros[0]);
	unset($ros[0]);
	$ros = array_values($ros);
	$str = implode(" ", $ros);
	return($str);
}

print(rostring($argv[1])."\n");

?>