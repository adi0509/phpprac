<!DOCTYPE html>
<html>
<head>
	<title>Practical 1</title>
</head>
<body>
	<h1>Practical 1</h1>
	<form method="post">
		<input type="text" name="str">
		<input type="submit" name="btn">
	</form>

	<?php
		if(isset($_POST['btn']))
		{
			$str = $_POST['str'];
			echo strrev($str);
		}
	?>
</body>
</html>