<!DOCTYPE html>
<html>
	<head>
		<title>Form destination</title>
	</head>

	<body>
		<?php

			if (isset($_POST["submit"])) 
			{
		

				echo "Name: {$_POST["name"]}<br><br>";
				echo "Age: {$_POST["age"]}<br><br>";
				echo "Gender: {$_POST["gender"]}<br><br>";
				echo "Email: {$_POST["email"]}<br><br>";
			}

			else
			{
				echo "form not submitted"; 
			}
		?>
	</body>
</html>