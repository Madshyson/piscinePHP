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

function get_op($str)
{
	$str = epur_str($str);
	if ($str[0] == "+")
		return(0);
	if ($str[0] == "-")
		return(1);
	if ($str[0] == "*")
		return(2);
	if ($str[0] == "/")
		return(3);
	if ($str[0] == "%")
		return(4);
}

if ($argc != 4)
	print("Incorrect Parameters\n");
else
{
	$nb1 = epur_str($argv[1]);
	$nb2 = epur_str($argv[3]);
	$op = get_op($argv[2]);
	if ($op == 0)
		print($nb1 + $nb2."\n");
	if ($op == 1)
		print($nb1 - $nb2."\n");
	if ($op == 2)
		print($nb1 * $nb2."\n");
	if ($op == 3)
		print($nb1 / $nb2."\n");
	if ($op == 4)
		print($nb1 % $nb2."\n");
}

?>