<?php
    session_start();

    if(isset($_POST['button'])){
        $email = $_POST['email'];
        $judul_buku = $_POST['judul'];
        $tanggal = $_POST['tanggal'];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["judul"] = $_POST["judul"];
        $_SESSION["pinjam"] = $_POST["pinjam"];
        $_SESSION["kembali"] = $_POST["kembali"];
        header("Location: peminjaman.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <header>
        <h3>E-Library Jakarta</h3>
        <ul>
            <li><a href="dasboard.php">Dasboard</a></li>
            <li><a href="buku.php">Daftar Buku</a></li>
            <li><a href="peminjaman.php">Peminjaman</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </header>
    <main>
        <form action="buku.php" method="post">
            <p style="text-align: left; font-weight: bold; font-size: 18px;">Form Pinjam</p>
            <table width="28%" border="0" cellspacing="5" cellpadding="2">
                <tr>
                    <td colspan="2" style="font-size: 16px;">Isi Data Dibawah Ini : </td>
                </tr>
                <tr>
                    <td width="10%" style="font-size: 16px;">Nama</td>
                    <td width="25%" style="font-size: 16px;"><label for="textfield"></label>
                    <?= $_SESSION['username']?></td>
                </tr>
                <tr>
                    <td style="font-size: 16px;">Email</td>
                    <td style="font-size: 16px;"><label for="Email"></label>
                    <input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td style="font-size: 16px;">Judul Buku</td>
                    <td style="font-size: 16px;"><label for="judul"></label>
                    <input type="text" name="judul" id="judul"></td>
                </tr>
                <tr>
                    <td style="font-size: 16px;">Tanggal Pinjam</td>
                    <td style="font-size: 16px;"><label for="pinjam"></label>
                    <input type="date" name="pinjam" id="pinjam"></td>
                </tr>
                <tr>
                    <td style="font-size: 16px;">Tanggal Kembali</td>
                    <td style="font-size: 16px;"><label for="kembali"></label>
                    <input type="date" name="kembali" id="kembali"></td>
                </tr>
                <tr>
                    <td colspan="2" style="font-size: 12px;"><input type="submit" name="button" id="button" value="submit">
                    <input type="reset" name="button2" value="cancel"></td>
                </tr>
            </table>
        </form>
    </main>
</body>
</html>