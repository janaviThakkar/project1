<html>
	<head>
			<title>Form Source</title>
	</head>

	<body>
		<form action="form_destination.php" method="post">
			Name:&nbsp;&nbsp;<input type = "text" name = "name"/>
			<br/><br/>

			Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name = "age"/>
			<br /><br/>

			Gender:&nbsp;Male<input type = "radio" name = "gender" value = "male"/>
					&nbsp;Female<input type = "radio" name = "gender" value ="female" />
			<br/><br/>

			Email:&nbsp;<input type = "text" name = "email">
			<br/><br/>
			
			<input type="submit" name="submit">

		</form>
	</body>
</html>