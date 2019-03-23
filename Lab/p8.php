<!DOCTYPE html>
<html>
<head>
	<title>Practical 8</title>
</head>
<body>
	<h2>Practical 8</h2>
	<form action="" method="post">
		<input type="name" name="email">
		<input type="submit" name="btn">
	</form>
	<?php
		function checkDomain($str)
		{
			$db = mysqli_connect('localhost', 'root', '', 'omnicoder');
			$sql = "SELECT * FROM xyz WHERE domainName='$str'";
			$result = mysqli_query($db, $sql);

			if(mysqli_num_rows($result)==1) 
			{
				$message= "Domain name is correct";
			}
			else 
			{
				$message= ' Domain name is not correct';
			}
			echo $message;
		}


		if (isset($_POST['btn'])) 
		{
			$email = $_POST['email'];
			$index = strpos($email,'@');
			$str = "";
			if(($index==''))
			{
				echo "Invalid email";
			}
			elseif($index>=3 and $index<=strlen($email)-3)
			{
				for ($i=$index+1; $i <strlen($email) ; $i++) { 
					$str = $str.$email[$i];
				}

				checkDomain($str);

				echo $str;
			}
			else
			{
				echo "Invalid email";
			}
			
		}
	?>

</body>
</html>