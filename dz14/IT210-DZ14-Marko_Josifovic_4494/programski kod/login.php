<?php
    require_once("connect.php");
    session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password = md5($password);
    
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $stmt = $con->prepare("SELECT * FROM korisnik WHERE username=:username AND password=:password");
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password",$password);
        $stmt->execute();
            
        $row = $stmt->fetch();  
        if($row){
            session_start();
            $_SESSION["username"] = $row["username"];
            header('Location: index.php');
        }
        else {
            header('Location: loginPg.php');
        }
    }else {
        header('Location: loginPg.php');
    }
?>