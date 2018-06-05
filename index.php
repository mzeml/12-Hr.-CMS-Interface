<html>
	<head>
		<title>ACME CMS DEMO</title>
	</head>
	<body>
		<h1> MAIN MENU </h1>

		<h2> 1. View Records in Database </h2>
		<form action = "view.php">
		<button> View </button>
		</form>
		<h2> 2. Enter New Records </h2>
		<form action = "insert.php" method = "post">
		First Name: <input type = "text" name = "fName"><br>
		Last Name: <input type = "text" name = "lastName"><br>
		ID: <input type = "integer" name = "id"><br>
		Role: <input type = "text" name = "role"><br>
		<input type="submit" name="submit" value="Submit">
		</form>
		<h2> 3. Delete a Record </h2>
		<form action="remove.php" method="post">
		First Name: <input type = "text" name = "fName"><br>
		Last Name: <input type = "text" name = "lastName"><br>
		<input type="submit" name="submit" value="Submit">
		</form>
	</body>
</html>
