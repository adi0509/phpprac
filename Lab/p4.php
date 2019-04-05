<!DOCTYPE html>
<html>
<head>
	<title>Practical 4</title>
</head>
<body>

	<h2>Practical 4</h2>
	<form method="post" action="">
		<input type="date" name="bday">
		<input type="submit" name="btn">
	</form>
	<?php
		if(isset($_POST['btn']))
		{
			$bDayArr = $_POST['bday'];
			$bday =  new DateTime($bDayArr);
			$now = new DateTime();
			$diff = date_diff($now,$bday);
			echo "<br><br><b>	Time left: </b>";
			echo $diff->format("%y year, %months, %d days, %h hours and %i minuts");
		}
	?>
</body>
</html>
