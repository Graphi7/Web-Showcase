<?php
    session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CREATE</title>
    <link rel="stylesheet" href="assets/css/reg.css">
</head>
<body>

    <form action="events/signup.php" method="post" enctype="multipart/form-data">
        <label>Name</label>
        <input type="text" name="user_name" placeholder="Set your name">
        <label>Login</label>
        <input type="text" name="login" placeholder="Set your login">
        <label>E-mail</label>
        <input type="email" name="email" placeholder="Set your e-mail">
        <label>Profile avatar</label>
        <input type="file" name="avatar">
        <label>Password</label>
        <input type="password" name="password" placeholder="Set password">
        <label>Repeat password</label>
        <input type="password" name="password_confirm" placeholder="Repeat your password">
        <button type="submit">Войти</button>
        <a href="login.php">Log in</a>
        
    </form>

</body>
</html>