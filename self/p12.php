<!DOCTYPE html>
<html>
<head>
	<title>Practical 12</title>
</head>
<body>
	<h1>Practical 12</h1>
	<h4>Q. WAP to check whether the given number is prime or not.</h4>
	<form action="" method="post">
		<input type="number" name="n">
		<input type="submit" name="btn" >
	</form>

	<?php
		function check($n)
		{ 
			if($n==1)  
			{
				return 0;
			}
			for($i=2;$i<$n;$i++)
			{
				//global $t;
				if($n%$i==0)
					{
						return 0;
					}
			}
			return 1;
		}
		if(isset($_POST["btn"]))
		{
			$num = $_POST["n"];
			$v = check($num);
			if($v==1)
			{
				echo "<br>Number $num is a <b>prime number.</b>";
			}
			else
			{
				echo "<br>Number $num is <b>not a prime number.</b>";
			}
		}
	?>
</body>
</html>
