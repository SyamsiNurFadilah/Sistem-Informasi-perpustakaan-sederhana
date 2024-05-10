<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard Perpustakaan</title>
</head>
<body>
    <header>
        <h3>E-Library Jakarta</h3>
        <ul>
            <li><a href="dasboard.php">Dasboard</a></li>
            <li><a href="buku.php">Daftar Buku</a></li>
            <li><a href="peminjaman.php">Peminjaman</a></li>
            <li><a href="index.php">Log out</a></li>
        </ul>
    </header>
    <main>
        <h2>Selamat Datang <?= $_SESSION["username"];?><br>Di Perpustakaan Online Jakarta</h2>
        <p>Web ini dibuat untuk memudahkan warga Jakarta dalam mengakses perpustakaan secara online dimanapun dan kapanpun.</p>
    </main>
</body>
</html>