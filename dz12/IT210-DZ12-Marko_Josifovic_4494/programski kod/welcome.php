<?php
	require_once("connect.php");
	session_start();
	$username = $_SESSION['username'];
	$name = $_SESSION['name'];
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
	
	$stmt = $con->prepare("SELECT * FROM korisnik WHERE username=:username");
	$stmt->bindParam(":username", $username);
	$stmt->execute();
	$user = $stmt->fetch();
?>
<html>
	<head>
		<title>Welcome strana - Marko Josifović 4494</title>
	</head>
	<body>
		<h1>Welcome <?php echo $name ?>!</h1>
		<a href="logout.php">Logout</a>
	</body>
</html>