<?php
	require_once("connect.php");
	
	$username = $_POST["username"];
	$password = $_POST["pass"];
	$password = md5($password);
	$name = $_POST["name"];
	
	$sql = $con->prepare("INSERT INTO korisnik (username, password, name) VALUES (:username, :password, :name)");
	$sql->bindParam(":username", $username);
	$sql->bindParam(":password", $password);
	$sql->bindParam(":name", $name);
	$data = $sql->execute();
	
	if($data){
		echo "Uspešna registracija!";
		header("Location: index.php");
	}
	else{
		echo "Greška prilikom unosa!";
	}
?>