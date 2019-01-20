<?php
	 session_start();

	$db = mysqli_connect('localhost', 'root', '', 'testdb');
	// if ($db->connect_error) {
 //    		die("Connection failed: " . $db->connect_error);
	// 	} 
	// 	echo "Connected successfully";
	if(isset($_POST['register_btn']))
	{	
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];

		if($password2==$password){
			//create user
			$password = md5(($password)); //hash password before storing
			$sql = "INSERT INTO userd(username,email,password) VALUES('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['username']=$username;
			header("location: home.php");//redirect to home page
		}
		else {
			//failed
			$_SESSION['message'] = "The two password do not  match";
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
	<form method="post" action="register.php">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" class="textInput"></td>
			</tr>
			<tr>
				<td>email:</td>
				<td><input type="email" name="email" class="textInput"></td>
			</tr>
			<tr>
				<td>password:</td>
				<td><input type="password" name="password" class="textInput"></td>
			</tr>
			<tr>
				<td>password again:</td>
				<td><input type="password" name="password2" class="textInput"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="register_btn" value="Register"></td>
			</tr>
			<tr>
				<td></td>
				<td class="link"><a href="login.php">Login Here</a></td>
			</tr>
		</table>
	</form>

</body>
</html>