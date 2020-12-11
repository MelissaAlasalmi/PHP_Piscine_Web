<?PHP
$cookie_name = $_GET["name"];
$cookie_value = $_GET["value"];
$action = $_GET["action"];
if($action == "set")
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');
if ($action == "get")
{
	$cookie_value = $_COOKIE[$cookie_name];
	echo $cookie_value . "\n";
}
if ($action == "delete")
	setcookie($cookie_name, '', time() - 3600);
?>
