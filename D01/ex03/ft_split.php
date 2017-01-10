#!/usr/bin/php
<?PHP

function ft_split($str)
{
	$split = explode(" ", "$str");
	$split = array_filter($split);
	$split = array_values($split);
	return($split);
}
?>