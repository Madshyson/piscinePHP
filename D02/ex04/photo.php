#!/usr/bin/php
<?PHP
if ($argc == 2)
{
	$id = curl_init($argv[1]);
	curl_setopt($id, CURLOPT_RETURNTRANSFER, TRUE);
	$file = curl_exec($id);
	preg_match_all( '@<img ([^>]*)@i', $file, $match);
	$image = array();
	foreach($match[1] as $var)
	{
		preg_match("@src=\"https?:\/\/([^\"]+)@i", $var, $src);
		if (strlen($src[1]))
			array_push($image, $src[1]);
		else
		{
			preg_match("@src='https?:\/\/([^\']+)@i", $var, $src);
			if (strlen($src[1]))
				array_push($image, $src[1]);
		}
	}
	preg_match('@^(?:https?://)?([^/]+)@i', $argv[1], $dirname);
	if (!is_dir($dirname[1]) && strlen($dirname[1]))
		mkdir($dirname[1]);
	foreach($image as $tab)
	{
		$set = explode('"', $tab);
		$path = $set[0];
		$id2 = curl_init($path);
		curl_setopt($id2, CURLOPT_RETURNTRANSFER, TRUE);
		$img = curl_exec($id2);
		$path = explode('/', $path)[count(explode('/',$path))-1];
		if ($path[strlen($path) - 4] == ".")
		{
			$fd = fopen($dirname[1]."/".$path, 'w');
			fwrite($fd, $img);
			fclose($fd);
		}
	}
}
 ?>