<?PHP
if ($_POST["login"] && $_POST["passwd"] && $_POST["submit"] == "OK")
{
	if (file_exists("../private/passwd")
	{
		$str = unserialise(file_get_content("../private/passwd"));
		foreach($str as $el)
		{
			if($el["login"] == $_POST["login"])
				echo "ERROR";
		}
	}
	$pwd = $_POST["passwd"];
	if (!file_exists("../private/"))
		mkdir("../private/");
	$hpwd = hash('sha512', $pwd);
	$acc["login"] = $_POST["login"];
	$acc["passwd"] = $hpwd;
	$tab_acc[] = $acc;
	$tab_acc = serialize($tab_acc);
	file_put_contents("../private/passwd", $tab_acc);
	echo "OK";
}
else
	echo "ERROR";
?>