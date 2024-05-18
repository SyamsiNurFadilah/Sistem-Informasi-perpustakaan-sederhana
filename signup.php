<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <table>
        <form action="signin.php" method="post">
            <p><b>Form Sign Up</b></p>
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
                <td><button type="submit" name="submit1" id="submit1">Sign Up</button> 
                <button type="reset" name="reset1" id="reset1">Cancel</button></td>
            </tr>
        </form>
    </table>
</body>
</html>