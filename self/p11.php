<!DOCTYPE html>
<html>
<head>
	<title>Practical 11</title>
</head>
<body>
	<h1>Practical 11</h1>
	<h4>Q. Write a function to calculate the factorial of a number (non-negative integer). The function accept the number as an argument.</h4>
	<form action="" method="post">
		<input type="number" name="n">
		<input type="submit" name="btn" >
	</form>

	<?php
		function fact($n)
		{
			if($n>0)
			{
				$f=1;
				for($i=$n;$i>0;$i--)
				{
					$f*=$i;
				}
				return $f;
			}
			return 1;
		}
		if(isset($_POST["btn"]))
		{
			$num = $_POST["n"];
			for($i=0;$i<$num;$i++)
			{
				echo ($i+1);
				if($i!=$num-1)
				{
					echo " * ";
				}
			}
			echo " = ";
			echo fact($num);
		}
	?>
</body>
</html>
