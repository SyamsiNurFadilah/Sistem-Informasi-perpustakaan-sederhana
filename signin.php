<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/signin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <table>
                <form action="home.php" method="post">
                    <tr>
                        <td><p style="font-family: Montserrat;"><b>Form Sign In</b></p></td>
                    </tr>
                    <tr>
                        <td>Username : </td>
                        <td><input type="text" name="username" id="username" required></td>
                    </tr>
                    <tr>
                        <td>Password : </td>
                        <td><input type="password" name="password" id="Password" required></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="submit" id="submit">Sign In</button> 
                        <button class="cnl1"><a href="index.php">Cancel</a></button></td>           
                    </tr>
                </form>
            </table>
        </div>
    </div>
</body>
</html>