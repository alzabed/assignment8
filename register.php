<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<form action="register.php" method="POST">
		<label>First Name:</label>
		<input type="text" name="firstname"><br><br>

		<label>Last Name:</label>
		<input type="text" name="lastname"><br><br>

		<label>Email:</label>
		<input type="email" name="email"><br><br>

		<label>Password:</label>
		<input type="password" name="password"><br><br>

		<label>Confirm Password:</label>
		<input type="password" name="confirm_password"><br><br>

		<input type="submit" name="submit" value="Submit">
	</form>
	<?php
		if (isset($_POST['submit'])) {
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirm_password = $_POST['confirm_password'];

			if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirm_password)) {
				echo "<p style='color:red;'>All fields are required and must not be empty</p>";
			} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "<p style='color:red;'>Invalid email format</p>";
			} elseif ($password != $confirm_password) {
				echo "<p style='color:red;'>Password and confirm password do not match</p>";
			} else {
				echo "<p style='color:green;'>Registration Successful!</p>";
				// code to insert the user's information into a database can be added here
			}
		}
	?>
</body>
</html>
