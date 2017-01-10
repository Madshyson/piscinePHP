#!/usr/bin/php
<?php

if ($argc == 2)
{
	$op = sscanf($argv[1], "%d %c %d");
	if ($op[0] && $op[1] && $op[2])
	{
		if($op[1] == '*')
			$result = $op[0] * $op[2];
		if($op[1] == '-')
			$result = $op[0] - $op[2];
		if($op[1] == '/')
			$result = $op[0] / $op[2];
		if($op[1] == '%')
			$result = $op[0] % $op[2];
		if($op[1] == '+')
			$result = $op[0] + $op[2];
		print($result."\n");
	}
	else
	{
		print("Syntax Error\n");
	}
}
else
	print("Incorrect Parameters\n");
?>