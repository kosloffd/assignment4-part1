<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
header('Content-Type: text/html');
?>

<!DOCTYPE html>
	<title>Multiplication Table</title>

	<?php
		$validated = true;
		//All the input validation performed first
		foreach($_GET as $key => $value)
		{
			if($value == "")
			{
				echo "Missing parameter: $key<br>";
				$validated = false;
			}
			if(!(is_numeric($value) && $value >= 0))
			{
				echo "<br>$key must be an integer.<br>";
				$validated = false;
			}
		}

		//Check whether the variables are comparatively less or more
		if($_GET["min-multiplicand"] > $_GET["max-multiplicand"])
		{
			echo "The min-multiplicand value is larger than the max-multiplicand value.";
			$validated = false;
		}
		if($_GET["min-multiplier"] > $_GET["max-multiplier"])
		{
			echo "The min-multiplier value is larger than the max-multiplier value.";
			$validated = false;
		}
		if($validated == true)
		{
			$minMultiplicand = $_GET["min-multiplicand"];
			$maxMultiplicand = $_GET["max-multiplicand"];
			$minMultiplier = $_GET["min-multiplier"];
			$maxMultiplier = $_GET["max-multiplier"];	

			echo "<table>";
			for($col = $minMultiplicand-1; $col<=$maxMultiplicand; $col ++)
			{
				echo "<tr>";
				if($col != $minMultiplicand-1) {echo "<td>$col";}
				else{echo "<td>";}

				for($row =  $minMultiplier; $row<=$maxMultiplier; $row++)
				{
					if($col != $minMultiplicand-1)					//other than the first row
					{
						$product = $row*$col;
						echo "<td>$product";
					}
					else{echo "<td>$row";}									//in the first row just put labels
				}
			}
			echo "</table>";
		}
?>