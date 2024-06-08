<?php
session_start();

if(isset($_SESSION['login'])){
    header('location:index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    </head>
        <body>
            <div class ="container">
                <h1>Login</h1>
                <form action="phplogin.php" method="post">
                    <label>Username</label><br>
                    <input type="text" name ="Username" required><br>
                    <label>Password</label>
                    <input type="password" id="password" name="password" required>
                    <button type="submit" name="submit" class="btn submit">Login</button><br>
                    <br>
                    <center><p class="register"><a href="register.php">Creat Acount!!</a></p></center>
</form>
            </div>
            <img src = "gradient.jpg" width="1510" height="660">
        </body>

</html>