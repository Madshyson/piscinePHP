#!/usr/bin/php
<?PHP

function ft_is_sort($tab)
{
	for($i = 1; $tab[$i] != NULL; $i++)
		if($tab[$i] < $tab[$i - 1])
			return(0);
	return(1);
}
?>