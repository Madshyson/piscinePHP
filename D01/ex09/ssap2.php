#!/usr/bin/php
<?PHP

function compare($str1, $str2)
{
	$sort_list = array_merge(array('\0'), range('a','z'), array('0','1','2','3','4','5','6','7','8','9'), array(' ', '!', '"','#', '$','%','&',"'",'(',')','*','+','-','.','/',':',';','<','=','>','?','@','[','\\',']','^', '_','`','{','|','}','~'));
	$str1 = strtolower($str1);
	$str2 = strtolower($str2);
	$i = 0;
	while ($str1[$i] == $str2[$i])
	{
		if($str1[$i] == '\0')
			return(strlen($str2) - strlen($str1));
		$i++;
	}
	$a = array_search($str2[$i], $sort_list);
	$b = array_search($str1[$i], $sort_list);
	return($b - $a);
}

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

uasort($big_tab, 'compare');

foreach($big_tab as $val)
    print($val."\n");
?>