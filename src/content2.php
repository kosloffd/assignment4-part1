<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
header('Content-Type: text/html');

session_start();
if(isset($_GET["referrer"]) && $_GET["referrer"] == "valid")
{	
	if(!isset($_SESSION["valid"]))
	{
		$_SESSION["valid"] = "true";
	}
}

if(isset($_SESSION["valid"]) && $_SESSION["valid"] == "true")
{
	echo "<h2>Welcome to Page Two!<br><h3>We've been expecting you.<br><br>";
	echo "Click <a href=\"content1.php\">here</a> to go back to page one.";
}

else
{
	header("Location: login.php", $replace = true);
}
?>

