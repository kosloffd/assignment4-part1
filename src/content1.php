<?php
	error_reporting(E_ALL);
	ini_set('display_errors', true);
	header('Content-Type: text/html');

	//Check to see if they have entered a username
	if(isset($_POST["username"]) && ($_POST["username"] == ""))
	{
		echo "You must enter a user name.<br>Click <a href=\"login.php\">here</a> to return to the login screen.<br>";
	}

	
	
	else
	{
		session_start();

		//If the name hasn't been entered before, store in session name
		if(!isset($_SESSION["name"]) && isset($_POST["username"]))
		{	
			$_SESSION["name"] = $_POST["username"];
			$_SESSION["valid"] = "true";
		}

		if(isset($_SESSION["valid"]) && $_SESSION["valid"] == "true")
		{
		
			//If a logout=true was sent by GET, close it down
			if(isset($_GET["logout"]) && $_GET["logout"] == "true")
			{
				$_SESSION = array();
				session_destroy();
				header("Location: login.php", $replace = true);
				exit();
			}

			//Set visit log up if not set up yet
			if(!isset($_SESSION["visits"]))
			{
				$_SESSION["visits"] = 0;
			}

			echo "Hi $_SESSION[name], you have visited this page $_SESSION[visits] times before.<br>";
			echo "Click <a href=\"content2.php?referrer=valid\">here</a> to go to page 2.<br><br>";
			echo "Click <a href=\"content1.php?logout=true\">here</a>to logout.";
			$_SESSION["visits"] ++;
		}
		else
		{
			header("Location: login.php", $replace = true);
		}
	}	





		


	//need to make sure name stays in $_SESSION when I revisit this page (not redirect to login)
	//need to set up content2 page on $_SESSION["visits"] >=1 and redirect if no previous session
?>
	<!-- <form action="content1.php", method="GET">
	<button name="logout", value="true", type="submit">Logout</button>
</form> -->
