<!DOCTYPE html>
<html>
<head>
	<title>Practical 10</title>
	<style type="text/css">
		.input {
			padding: 10px;
		}
		.btn {
			padding: 8px;
			margin-left:10px;
		}
	</style>
</head>
<body>
<h1>Practical 1</h1>
<h4>Q. Create a PHP page using functions for comparing three integers and print the largest number.</h4>
	<form action="" method="post">
		<div class="input">
			Enter number 1:
			<input type="number" name="num1"><br>
		</div>
		<div class="input">
			Enter number 2:
			<input type="number" name="num2"><br>
		</div>
		<div class="input">
			Enter number 3:
			<input type="number" name="num3"><br>
		</div>
		<input type="submit" class="btn" name="SubmitButton">
	</form>
<br>
<?php
	if(isset($_POST['SubmitButton'])) 
		{
			$n1 = htmlentities($_POST["num1"]);
			$n2 = htmlentities($_POST["num2"]);
			$n3 = htmlentities($_POST["num3"]);
			$x = $n1>$n2?$n1:$n2;
			$ans = $x>$n3?$x:$n3;
			echo "Greatest number is: $ans";
		}
?>

</body>
</html>