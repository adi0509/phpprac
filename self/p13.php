<!DOCTYPE html>
<html>
<head>
	<title>Practical 13</title>
</head>
<body>
	<h1>Practical 13</h1>
	<h4>Q. WAP to print first n even numbers.</h4>
	<form action="" method="post">
		<input type="number" name="n">
		<input type="submit" name="btn" >
	</form>

	<?php
		 if(isset($_POST["btn"]))
		 {
			$num = $_POST["n"];
			$temp = 2;
			for($i=0;$i<$num;$i++)
			{
				echo $temp." ";
				$temp+=2;
			}
		 }
	?>
</body>
</html>
