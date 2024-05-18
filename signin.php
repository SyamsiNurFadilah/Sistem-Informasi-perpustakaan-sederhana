<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
    <table>
        <form action="dashboard.php" method="post">
            <p><b>Form Sign In</b></p>
            <tr>
                <td>Username : </td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" name="password" id="Password"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit" id="submit">Sign In</button> 
                <button type="reset" name="reset" id="reset">Cancel</button></td>
            </tr>
        </form>
    </table>
</body>
</html>