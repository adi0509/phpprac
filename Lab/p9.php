<!DOCTYPE html>
<html>
<head>
	<title>Practical 7</title>
</head>
<body>
	<h2>Practical 7</h2>

	<?php
		echo "<h3>Result</h3>";
		$db = mysqli_connect('localhost', 'root', '', 'testdb');
		$sql = "SELECT * FROM student";
		$result = mysqli_query($db, $sql);
		$message = "<table>  <tr>  <th>Roll</th>  <th>Name</th>  <th>Subject 1</th>  <th>Subject 2</th>  <th>Subject 3</th>   </tr>";
		while($row = $result->fetch_assoc())
		{
			$message = $message." <tr>  <td>".$row['roll']."</td><td>".$row['name']."</td><td>".$row['sub1']."</td><td>".$row['sub2']."</td><td>".$row['sub3']."</td> </tr>";
		}
		echo "$message";

	?>

</body>
</html>