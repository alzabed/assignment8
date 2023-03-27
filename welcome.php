<?php
session_start();

if (!isset($_SESSION)) {
	$_SESSION = array();
}

if (!isset($_SESSION['firstname'])) {
	header("Location: login.php");
	exit();
}

$firstname = $_SESSION['firstname'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to My Website</title>
</head>
<body>
	<h1>Welcome, <?php echo $firstname; ?>!</h1>
	<p>Click <a href="logout.php">here</a> to log out.</p>
</body>
</html>

