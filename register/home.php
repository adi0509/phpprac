<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
		<h1>Register, login & logout user</h1>
</div>

<?php
 echo "this is testing phase: ".empty($_SESSION['username']);	
	if(empty($_SESSION['username'])==1)
		if(isset($_SESSION['message']))
		{
			echo "<div id='error_msg'>".$_SESSION['message']."</div>";
			unset($_SESSION['message']);
		}
	else
	{
		header("location: login.php");
	}
?>

<h1>Home</h1>

<div><h4>Welcome <?php  echo $_SESSION['username'];?></h4></div>

<div><a href="logout.php">Logout</a></div>

</body>
</html>