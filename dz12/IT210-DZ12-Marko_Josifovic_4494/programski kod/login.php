<?php
	require_once("connect.php");
	
	$username = $_POST["username"];
	$password = $_POST["pass"];
	$password = md5($password);
	
	$stmt = $con->prepare("SELECT * FROM korisnik WHERE username=:username AND password=:password");
	$stmt->bindParam(":username", $username);
	$stmt->bindParam(":password", $password);
	$stmt->execute();
	
	$row = $stmt->fetch();
	
	if($row){
		session_start();
		$_SESSION["name"] = $row["name"];
		$_SESSION["username"] = $row["username"];
		header("Location: welcome.php");
	}
	else{
		echo "Pogrešan username i/ili password!";
		echo "<br><a href=\"index.php\">Povratak</a>";
	}

?>