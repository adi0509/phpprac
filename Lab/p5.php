<!DOCTYPE html>
<html>
<head>
	<title>Practical 5</title>
</head>
<body>
	<h2>Practical 5</h2>
	<?php
		$color = array('white', 'green', 'red');
		for ($i=0; $i < 3; $i++) { 
			echo ($color[$i].", ");
		}
		echo "<br>";

		sort($color);
		echo "<ul>";
		for ($i=0; $i < 3; $i++) { 
			echo "<li>$color[$i]</li>";
		}
		echo "</ul>";

	?>

</body>
</html>