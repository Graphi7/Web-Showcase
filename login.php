<?php
session_start();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOG IN</title>
    <link rel="stylesheet" href="assets/css/reg.css">
</head>
<body>


    <form action="events/signin.php" method="post">
        <label>Login</label>
        <input type="text" name="login" placeholder="Your login">
        <label>Password</label>
        <input type="password" name="password" placeholder="Yuor password">
        <button type="submit">Войти</button>
        <a href="registration.php">Create new account</a>
       
    </form>

</body>
</html>