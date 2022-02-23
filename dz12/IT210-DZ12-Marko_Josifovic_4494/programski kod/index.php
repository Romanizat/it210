<?php
	session_start();
	if(isset($_SESSION['username'])){
		header("Location: page.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Marko Josifović 4494 - DZ12</title>
</head>
<body>
    <h1>Marko Josifović</h1>
    <h2>IT210 - DZ12</h2>
    <form method="POST" action="login.php">
			<input type="text" name="username" placeholder="Enter username"/><br>
			<input type="password" name="pass" placeholder="Enter password"/><br>
			<input type="submit" value="Login"/>
			<a href="registration.php">Register</a>
		</form>
</body>
</html>