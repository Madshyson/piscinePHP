<?PHP
session_start();
if ($_GET["login"] && $_GET["passwd"] && $_GET["submit"])
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}

print("<html><body>
<form>
Identifiant:<input type='text' name='login' value=\"".$_SESSION['login']."\" >
<br />
Mot de passe:<input type='text' name='passwd' value=\"".$_SESSION['passwd']."\" >
<input type='submit' name='submit' value='OK'>
</form>
</body></html>");

?>