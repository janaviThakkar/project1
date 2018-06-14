<html>
<head>
	<title>validation form</title>
</head>
	<body>
		<?php

			if(isset($_POST["submit"])) 

			{
				$name = $_POST["name"];
				$age = $_POST["age"];
				$email = $_POST["email"];

				if(strlen($name) < 5)
					{
						echo "username is too short";
					}

				elseif(!is_numeric($age))
					{
						echo "please enter valid number";
					}

				elseif (empty($email))
					{
						echo "please enter valid email";
					}
				else
				{
					echo "Name: {$_POST["name"]}<br><br>";
					echo "Age: {$_POST["age"]}<br><br>";
					echo "Email: {$_POST["email"]}<br><br>";
				}

			}

			else
			{
				echo "form not submitted"; 
			}
			
		?>

	</body>
</html>