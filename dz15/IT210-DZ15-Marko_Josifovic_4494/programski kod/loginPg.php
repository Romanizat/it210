<?php
require_once("connect.php");
session_start();
if(isset($_SESSION['username'])){
    header('Location: index.php');
}
?>

<?php if (empty($_SESSION['username'])) { ?>
        <div style="text-align: center;">
            <form method="POST" action="login.php" style="text-align: center;">
                <h2>Login</h2>
                <input type="text" name="username" placeholder="Username" required>
                <br> <br>
                <input type="password" name="password" placeholder="Password" required>
                <br> <br>
                <button type="submit" name="login">Login</button>
                <br> <br> <br>
                <a href="registerPg.php" style="text-align: center; font-size: 30px;">Nemate nalog? Registrujte se!</a>
                <br>
                <br>
                <a href="index.php" style="text-align: center; font-size: 20px;">Povratak na početnu</a>
            </form>
        </div>
<?php } ?>