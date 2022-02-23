<?php
    require_once("connect.php");
    session_start();

    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = md5($password);

        $stmt = $con->prepare("INSERT INTO korisnik (username, password, admin) VALUES (:username, :password, 0)");
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);

        $stmt->execute();
        header('Location: loginPg.php');
    }else {
        header('Location: registerPg.php');
    }
?>