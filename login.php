<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<h1>Login Form</h1>
	<form action="login.php" method="POST">
		<label>Email:</label>
		<input type="email" name="email"><br><br>

		<label>Password:</label>
		<input type="password" name="password"><br><br>

		<input type="submit" name="submit" value="Login">
	</form>
	<?php
		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			if (empty($email) || empty($password)) {
				echo "<p style='color:red;'>Both fields are required and must not be empty</p>";
			} elseif ($email != "test@example.com" || $password != "password") {
				echo "<p style='color:red;'>Invalid email or password</p>";
			} else {
				session_start();
				$_SESSION['firstname'] = "Al Zabed"; // replace with code to retrieve user's first name from a database
				header("Location: welcome.php");
				exit();
			}
		}
	?>
    <?php
session_start();

if (!isset($_SESSION['firstname'])) {
	header("Location: login.php");
	exit();
}
?>

</body>
</html>
