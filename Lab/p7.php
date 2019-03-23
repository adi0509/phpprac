<!DOCTYPE html>
<html>
<head>
	<title>Practical 7</title>
</head>
<body>
	<h2>Practical 7</h2>

	<form method="POST" action="">
		username: <input type="name" name="username"><br>
		password: <input type="name" name="password"><br>
		<input type="submit" name="btn">
	</form>

	<?php
		if (isset($_POST['btn'])) 
		{
			$username = $_POST['username'];
			$password = $_POST['password'];

			$db = mysqli_connect('localhost', 'root', '', 'omnicoder');
			$sql = "SELECT * FROM xyz WHERE username='$username' AND pwd='$password'";
			$result = mysqli_query($db, $sql);
			$message = "";
			if(mysqli_num_rows($result)==1) 
			{
				$message= '<span id="succesful">You are now logged in</span>';
				// $_SESSION['userName']= $username;
			}
			else 
			{
				$message= '<span id="error"> Username/Password combination is not correct </span>';
			}
			echo "$message";
		}

	?>

</body>
</html>