<?php
	try{
		$con = new PDO("mysql:host=localhost;dbname=it210_domaci14_markoj4494", "root","");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}
?>