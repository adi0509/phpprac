<?php
	 session_start();

	$db = mysqli_connect('localhost', 'root', '', 'testdb');
	// if ($db->connect_error) {
 //    		die("Connection failed: " . $db->connect_error);
	// 	} 
	// 	echo "Connected successfully";
	if(isset($_POST['login_btn']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$password = md5($password); //
		$sql = "SELECT * FROM userd WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $sql);

		if(mysqli_num_rows($result)==1) {
			$_SESSION['message']= "YOu are now logged in";
			$_SESSION['username']= $username;
			header("location: home.php"); //redirect;
		}
		else {
			$_SESSION['message']= "Username/Password combination is not correct";
		}
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Register, login & logout</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h1>Register, login & logout user</h1>
	</div>

	<?php
		if(isset($_SESSION['message']))
		{
			echo "<div id='error_msg'>".$_SESSION['message']."</div>";
			unset($_SESSION['message']);
		}
	?>

	<form method="post" action="login.php">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" class="textInput"></td>
			</tr>
			<tr>
				<td>password:</td>
				<td><input type="password" name="password" class="textInput"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login_btn" value="Login"></td>
			</tr>
			<tr>
				<td></td>
				<td class="link"><a href="register.php">New User?</a></td>
			</tr>
		</table>
	</form>


</body>
</html>