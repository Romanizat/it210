<?php
	session_start();
	if(isset($_SESSION['username'])){
		header("Location: page.php");
	}
?>
<html>
	<head>
		<title>Registrovanje - Marko Josifović 4494</title>
	</head>
	<body>
		<form method="POST" action="register.php">
			<input type="text" name="username" placeholder="Enter username"/><br>
			<input type="password" name="pass" placeholder="Enter password"/><br>
			<input type="text" name="name" placeholder="Enter name"/><br>
			<input type="submit" value="Register"/>
		</form>
	</body>
</html>