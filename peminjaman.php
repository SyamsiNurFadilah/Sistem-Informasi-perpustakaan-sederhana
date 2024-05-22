
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/pinjam.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        footer{
            position: fixed;
            width: 100%;
            bottom: 0%;
            background-color: #909e5d;
            text-align: center;
            padding: 8px;
            font-family: Poppins;
            font-weight: bold;
            box-shadow: 7px 0px 8px 8px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
<header>
    <div class="container">
            <nav class="bar">
                <div class="logo">
                    <div class="firstname">Perpustakaan</div>
                    <div class="lastname">Jakarta</div>
                </div>
                <ul class="navigation">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="buku.php">Daftar Buku</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="wrapper">
                <form action="peminjaman.php" method="post">
                    <table>
                        <tr>
                            <td colspan="2"><h2>Isi Data Dibawah ini :</h2></td>
                        </tr>
                        <br>
                        <tr>
                            <td>Nama Lengkap :</td>
                            <td><input type="text" name="nama" id="nama" required></td>
                        </tr>
                        <tr>
                            <td>No Telpon :</td>
                            <td><input type="number" name="telpon" id="telpon" required></td>
                        </tr>
                        <tr>
                            <td>Alamat :</td>
                            <td><textarea name="alamat" id="alamat" cols="35" rows="3" required></textarea></td>
                        </tr>
                        <tr>
                            <td>Kode Buku :</td>
                            <td><input type="number" name="kode" id="kode" required></td>
                        </tr>
                        <tr>
                            <td>Tanggal Peminjaman :</td>
                            <td><input type="date" name="tglpinjam" id="tglpinjam" required></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pengembalian :</td>
                            <td><input type="date" name="tglkembali" id="tglkembali" required></td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="submit" id="submit">Pinjam</button> 
                            <button class="cnl1" type="reset" name="cancel" id="cancel">Batal</button></td>           
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </main>
    <footer>
        Create With ❤️ By Kelompok 4 <br>
        Copyright &copy; 2024
    </footer>
</body>
</html>

<?php

    if(isset($_POST["submit"])){
        $_SESSION["nama"] = $_POST["nama"];
        $_SESSION["telpon"] = $_POST["telpon"];
        $_SESSION["alamat"] = $_POST["alamat"];
        $_SESSION["kode"] = $_POST["kode"];
        $_SESSION["tglpinjam"] = $_POST["tglpinjam"];
        $_SESSION["tglkembali"] = $_POST["tglkembali"];
        header("Location: datapinjam.php");
    }

?>