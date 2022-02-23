<?php
require_once("connect.php");
session_start();
if(isset($_SESSION['username'])){
    header('Location: index.php');
}
?>

<?php if (empty($_SESSION['username'])) { ?>
        <div style="text-align: center;">
            <form method="POST" action="register.php" style="text-align: center;">
                <h2>Register</h2>
                <input type="text" name="username" placeholder="Username" required>
                <br> <br>
                <input type="password" name="password" placeholder="Password" required>
                <br> <br>
                <button type="submit" name="register">Register</button>
                <br> <br> <br>
                <a href="loginPg.php" style="text-align: center; font-size: 30px;">Imate nalog? Ulogujte se!</a>
                <br>
                <br>
                <a href="index.php" style="text-align: center; font-size: 20px;">Povratak na početnu</a>
            </form>
        </div>
<?php } ?>