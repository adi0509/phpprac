<!DOCTYPE html>
<html>
<head>
	<title>Practical 16</title>
</head>
<body>
	<h1>Practical 16</h1>
	<p>Enter number of terms: </p>
	<form action="" method="post">
		<input type="number" name="n">
		<input type="submit" name="btn">
	</form>
	<br><br>
	OUTPUT:<br>
	<?php
		function fibo($a, $b, $c)
		{
			if($a==0)
			{
				return 1;
			}
			else 
			{
				echo $b+$c." ";
				fibo($a-1, $c,  $b+$c);
			}
		}
		if(isset($_POST['btn']))
		{
			$num = $_POST['n'];
			if($num<=0)
			{
				echo "Enter a positive number!!";
			}
			if($num>=1)
				echo "0 ";
			if($num>=2)
				echo "1 ";
			if($num>=3)
				fibo($num-2, 0 , 1);
		}
	?>
</body>
</html>
