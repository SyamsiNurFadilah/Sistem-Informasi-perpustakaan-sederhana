<?php
    session_start();

    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $_SESSION["username"] = $_POST["username"];
        header("Location: dasboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <h2>Masuk Akun</h2>
        <p><input type="text" name="username" id="username" placeholder="Username"></p>
        <p><input type="password" name="password" id="password" placeholder="Password"></p>
        <button type="submit" name="submit">Login Now</button> 
        <a href="index.php">Home</a>
    </form>
</body>
</html>