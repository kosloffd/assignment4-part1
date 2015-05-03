<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
header('Content-Type: text/html');
?>

<!DOCTYPE html>
<title>Login Page</title>
<form action="content1.php" method="POST">
	<label>Enter your user name: </label>
	<input type="text" name="username">
	<input type="submit">
</form>