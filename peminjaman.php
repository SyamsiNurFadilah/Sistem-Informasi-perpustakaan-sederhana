<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Perpustakaan</title>
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
        <p style="text-align: left; font-weight: bold; font-size: 24px;">Data Peminjaman</p>
        <table border="1">
            <tr>
                <td width="50%" style="font-size: 20px;">Nama</td>
                <td width="52%" style="font-size: 20px;"><?= $_SESSION['username'];?></td>
            </tr>
            <tr>
                <td style="font-size: 20px;">Email</td>
                <td style="font-size: 20px;"><?= $_SESSION['email'];?></td>
            </tr>
            <tr>
                <td style="font-size: 20px;">Judul Buku</td>
                <td style="font-size: 20px;"><?= $_SESSION['judul'];?></td>
            </tr>
            <tr>
                <td style="font-size: 20px;">Tanggal Pinjam</td>
                <td style="font-size: 20px;"><?= $_SESSION['pinjam']?></td>
            </tr>
            <tr>
                <td style="font-size: 20px;">Tanggal Kembali</td>
                <td style="font-size: 20px;"><?= $_SESSION['kembali']?></td>
            </tr>
        </table>
    </main>
</body>
</html>