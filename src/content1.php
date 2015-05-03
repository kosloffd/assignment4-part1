<?php
	error_reporting(E_ALL);
	ini_set('display_errors', true);
	header('Content-Type: text/html');

	echo "<!DOCTYPE html>";
	echo "<title>JSON String</title>";

	$name = $_POST["username"];
	echo "Hi $name, you have visited this page n times before.<br>";
	echo "Click <a href=\"login.php\">here</a> to logout.";
?>