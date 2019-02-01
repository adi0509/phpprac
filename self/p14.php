<!DOCTYPE html>
<html>
<head>
	<title>Practical 14</title>
</head>
<body>
	<h1>Practical 14</h1>
	<h4>Q. WAP to print sum of first n odd numbers.</h4>
	<form action="" method="post">
		<input type="number" name="n">
		<input type="submit" name="btn" >
	</form>

	<?php
		if(isset($_POST["btn"]))
		{
			$num = $_POST["n"];
			$ans = $num*$num;
			echo "Sum of first $num odd numbers is: $ans";
		}
	?>
</body>
</html>
