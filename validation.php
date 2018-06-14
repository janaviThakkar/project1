<html>
<head>
	<title>Form Validation</title>
</head>
	<body>
		<?php
			if (isset($_POST["submit"])) 
				{
				$name = $_POST["name"];
				$age = $_POST["age"];
				$email = $_POST["email"];

				if(srtlen($name)<5)
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
					echo "successful.!";
				}

			else
			{
				echo "form not submitted"; 
			}
			
		?>

	</body>
</html>