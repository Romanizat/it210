<?php
    require_once("connect.php");
    session_start();
    if(isset($_SESSION['admin'])){
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<h1 style="text-align: center;">IT210 - DZ15 - Marko Josifović 4494</h1>
    
    <?php if(empty($_SESSION['username'])){?>
        <div  style="text-align: center;">
            <form method="POST" action="register.php" style="text-align: center;">
                <h2>Registracija</h2>
                <input type="text" name="username" placeholder="Username" required>
                <br> <br>
                <input type="password" name="password" placeholder="Password" required>
                <br> <br>
                <button type="submit" name="register">Register</button>
                <br> <br> <br>
                <a href="loginPg.php" class="sideA" style="text-align: center; font-size: 30px;" >Imate nalog? Prijavite se!</a>
            </form>
        </div>
    <?php }?>


</body>

</html>