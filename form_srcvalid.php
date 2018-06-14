<!DOCTYPE html>
<html>
<head>
	<title>Form validation</title>
</head>

	<body>

		<form action="form_validation.php" method="post">
			Name:&nbsp;&nbsp;<input type = "text" name = "name" required="name" />
			<br/><br/>

			Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name = "age" required="age" />
			<br /><br/>

			Email:&nbsp;<input type = "text" name = "email" required="email" />
			<br/><br/>
			
			<input type="submit" name="submit">

		</form>

	</body>
</html>