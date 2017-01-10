#!/usr/bin/php
<?PHP

if ($argc > 2)
{
	$i = 0;
	$key = $argv[1];
	unset($argv[0], $argv[1]);
	$argv = array_reverse($argv);
	foreach ($argv as $tab)
	{
		$tmp = explode(":", $tab);
		if ($key == $tmp[0])
		{
			print($tmp[1]."\n");
			exit (1);
		}
	}
}

?>