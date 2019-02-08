<!DOCTYPE html>
<html>
<head>
	<title>Practical 2</title>
</head>
<body>
	<h1>Practical 2</h1>
		<form action="" method="post">
			Enter number of elements:
			<input type="number" name="n"><br>
			<input type="submit" name="btn">
		</form>
		<br><br>
		<?php
			if(isset($_POST['btn']))
			{
				$n = $_POST['n'];
				$str = "<form action=\"\" method=\"post\">";
				for ($i=0; $i <$n ; $i++) 
				{ 
					$str= $str."<input type=\"text\" name=\"n".$i."\"><br>";
				}
				$str= $str."<input type=\"submit\" name=\"btn2\">";
				$str = $str."<input type=\"text\" value=$n  name =\"n\" style=\"display:none\">";
				$str= $str."</form>";

				echo $str;
			}

			if(isset($_POST['btn2']))
			{
				$num = $_POST['n'];
				$arr = array( );
				for ($i=0; $i < $num; $i++) 
				{ 
					$t = $_POST['n'.$i];
					array_push($arr, $t);
					// echo $arr[$i]."<br>";
				}
				sort($arr);
				for ($i=0; $i < $num; $i++) 
				{
					echo $arr[$i]."<br>";
				}
			}
		?>
</body>
</html>