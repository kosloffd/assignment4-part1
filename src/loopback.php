<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
header('Content-Type: text/html');

echo "<!DOCTYPE html>";
echo "<title>JSON String</title>";

$JSONString;

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$JSONString = "{\"Type\":\"POST\",\"Parameters\":";
	$JSON = json_encode($_POST);
	if($JSON == "[]")	{$JSON = "null";}
	$JSONString .= $JSON;
}

else if($_SERVER['REQUEST_METHOD'] == 'GET')
{
	$JSONString = "{\"Type\":\"GET\",\"Parameters\":";
	$JSON = json_encode($_GET);
	if($JSON == "[]")	{$JSON = "null";}
	$JSONString .= $JSON;
}

$JSONString .= "}";
echo $JSONString;
?>