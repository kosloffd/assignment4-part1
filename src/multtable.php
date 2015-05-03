<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
header('Content-Type: text/html');
?>

<!DOCTYPE html>
	<title>Multiplication Table</title>

	<?php
		//All the input validation performed first
		foreach($_GET as $key => $value)
		{
			if($value == "")
			{
				echo "Missing parameter: $key<br>";
			}
			if(!(is_numeric($value) && $value > 0))
			{
				echo "<br>$key must be an integer larger than zero.<br>";
			}
		}

		$minMultiplicand = $_GET["min-multiplicand"];
		$maxMultiplicand = $_GET["max-multiplicand"];
		$minMultiplier = $_GET["min-multiplier"];
		$maxMultiplier = $_GET["max-multiplier"];	

		//Check whether the variables are comparatively less or more
		if(!($minMultiplicand < $maxMultiplicand))
		{
			echo "The min-multiplicand value is larger than the max-multiplicand value.";
		}
		else if(!($minMultiplier < $maxMultiplier))
		{
			echo "The min-multiplier value is larger than the max-multiplier value.";
		}
		else
		{
			$height = $maxMultiplicand - $minMultiplicand + 2;
			$width = $maxMultiplier - $minMultiplier + 2;
			echo "<table>";
			for($col = 0; $col<$height; $col ++)
			{
				echo "<tr>";
				if($col != 0) {echo "<td>$col";}
				else{echo "<td>";}

				for($row = 1; $row<$width; $row++)
				{
					if($col != 0 & $row != 0)
					{
						$product = $row*$col;
						echo "<td>$product";
					}
					else{echo "<td>$row";}
					//else, echo "<td>$row*$col;" 
				}
			}
			echo "</table>";
		}
?>