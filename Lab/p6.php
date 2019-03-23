<!DOCTYPE html>
<html>
<head>
	<title>Practical 6</title>
</head>
<body>
	<h2>Practical 6</h2>

	<form action="" method="post">
		<select name="lang">
		  <option value="English">English</option>
		  <option value="Hindi">Hindi</option>
		  <option value="Punjabi">Punjabi</option>
		  <option value="Tamil">Tamil</option>
		  <option value="Sanskrit">Sanskrit</option>
		</select>
		<br><br>
		<input type="submit" name="btn">
	</form>
	<?php
		if (isset($_POST['btn'])) 
		{
			
			$lang = $_POST['lang'];

			echo  "<h3>Your message is in $lang:  ";
			switch ($lang) 
			{
				    case "English":
				        echo "Hello";
				        break;
				    case "Hindi":
				        echo "नमस्ते";
				        break;
				    case "Punjabi":
				        echo "ਹੈਲੋ";
				        break;
				    case "Tamil":
				        echo "ஹலோ";
				        break;
				    case "Sanskrit":
				        echo "सुप्रभातम्";
				        break;
				    default:
				        echo "Your favorite color is neither red, blue, nor green!";
			}
			echo "</h3>";
		}

	?>

</body>
</html>