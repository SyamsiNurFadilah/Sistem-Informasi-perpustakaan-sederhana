<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <table>
                <form action="signin.php" method="post">
                    <tr>
                        <td><p style="font-family: Montserrat;"><b>Form Sign Up</b></p></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap : </td>
                        <td><input type="text" name="nama" id="nama" required></td>
                    </tr>
                    <tr>
                        <td>Alamat : </td>
                        <td><textarea name="alamat" id="alamat" cols="35" rows="3" required></textarea></td>
                    
                    <tr>
                        <td>Email : </td>
                        <td><input type="email" name="email" id="email" required></td>
                    </tr>
                    <tr>
                        <td>No Telp : </td>
                        <td><input type="number" name="telpon" id="telpon" required></td>
                    </tr>
                    <tr>
                        <td>Username : </td>
                        <td><input type="text" name="username" id="username" required></td>
                    </tr>
                    <tr>
                        <td>Password : </td>
                        <td><input type="password" name="password" id="password" required></td>
                    </tr>
                    <tr>
                        <td style="font-family: Montserrat;"><button type="submit" name="submit" id="submit">Sign Up</button> 
                        <button class="cnl1"><a href="index.php">Cancel</a></button></td>
                    </tr>
                </form>
            </table>
        </div>
    </div>
</body>
</html>