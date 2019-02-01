<!DOCTYPE html>
<html>
<head>
	<title>Practical 15</title>
</head>
<body>
	<h1>Practical 15</h1>
	<h4>Q. Write a PHP script that checks whether a passed string is palindrome or not?</h4>
	<form action="" method="post">
		<input type="text" name="n">
		<input type="submit" name="btn" >
	</form>

	<?php
		function check($n)
		{ 
			$l = (strlen($n)-1);
			$rev = "";
			for($i=$l;$i>=0;$i--)
			{
				$rev = $rev.$n[$i];
			}
			if(strcmp($rev, $n))
				return 1;
			else
				return 0;
		}
		if(isset($_POST["btn"]))
		{
			$num = htmlentities($_POST["n"]);
			$v = check($num);
			if($v==0)
			{
				echo "<br>String '$num' is a <b> palindrome.</b>";
			}
			else
			{
				echo "<br>String $num is <b>not a palindrome.</b>";
			}
		}
	?>
</body>
</html>