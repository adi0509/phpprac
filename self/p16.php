<!DOCTYPE html>
<html>
<head>
	<title>Practical 16</title>
</head>
<body>
	<form action="" method="post">
		<input type="number" name="n">
		<input type="submit" name="btn">
	</form>

	<?php
		function fibo($a, $b, $c)
		{
			if($a==1)
			{
				echo "1 ";
				return 1;
			}
			elseif($a==2)
			{
				echo "1 1 ";
				return 1;
			}
			else
			{
				echo $a+$b;
			}
		}

		if(isset($_POST['btn']))
		{
			$num = $_POST['n'];
			fibo($num);
		}
	?>
</body>
</html>