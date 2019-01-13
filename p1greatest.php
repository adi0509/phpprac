<!DOCTYPE html>
<html>
<head>
	<title>Greatest</title>
</head>
<body>
	<?php 
		$n1 = $_POST["num1"];
		$n2 = $_POST["num2"];
		$n3 = $_POST["num3"];
		$x = $n1>$n2?$n1:$n2;
		$ans = $x>$n3?$x:$n3;
		echo "Greatest number is: $ans";
	?>
</body>
</html>