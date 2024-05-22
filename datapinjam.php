
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pinjam</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/data.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        button{
            padding: 10px;
            background-color: #909e5d;
            border: none;
            color: #fff;
            font-size: 18px;
        }

        button:hover{
            background-color: #A91D3A;
            transition: all .3s ease-in-out;
            border-radius: 10px;
            cursor: pointer;
        }
        
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

    <?php
        $kode = $_SESSION["kode"];

        if($kode == "101"){
            $judul =  "Perahu Kertas";
            $pengarang = "Dee Lestari";
        
        }elseif($kode == "102"){
            $judul = "Ayah";
            $pengarang = "Andrea Hirata";
            
        }elseif($kode == "103"){
            $judul = "Laskar Pelangi";
            $pengarang = "Andrea Hirata";
            
        }elseif($kode == "104"){
            $judul = "Melangkah";
            $pengarang = "J.S Khairen";
            
        }elseif($kode == "105"){
            $judul = "Easy & Simple Web Programming";
            $pengarang = "Rohi Abdulloh";
            
        }elseif($kode == "106"){
            $judul = "111 Kode HMTL";
            $pengarang = "Arista Prasetyo Adi";
            
        }elseif($kode == "107"){
            $judul = "Dasar Programming Visual Foxpro 9.0";
            $pengarang = "Hendra Wijaya";
            
        }elseif($kode == "108"){
            $judul = "Logika Pemprograman Python";
            $pengarang = "Abdul Kadir";
            
        }elseif($kode == "109"){
            $judul = "Fisika Dasar II";
            $pengarang = "Drs.Soeharto";
            
        }elseif($kode == "110"){
            $judul = "Fisika Statistik";
            $pengarang = "Dr.Juniastel Rajagukguk,M.Si";
        
        }else{
            $judul = "Tidak Ditemukan !!";
            $pengarang = "Tidak Ditemukan !!";
        }
            
    ?>

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
                    <form action="home.php" method="post">
                        <li><button type="submit" name="logout">Logout</button></li>
                    </form>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="wrapper">
            <form action="" method="post">
                <table>
                    <tr>
                        <td><h2>Data Peminjaman :</h2></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Nama Lengkap : </td>
                        <td><?php echo $_SESSION["nama"];?></td>
                    </tr>
                    <tr>
                        <td>No Telpon : </td>
                        <td><?php echo $_SESSION["telpon"];?></td>
                    </tr>
                    <tr>
                        <td>Alamat : </td>
                        <td><?php echo $_SESSION["alamat"];?></td>
                    </tr>
                    <tr>
                        <td>Kode Buku : </td>
                        <td><?php echo $_SESSION["kode"];?></td>
                    </tr>
                    <tr>
                        <td>Judul Buku : </td>
                        <td><?php echo $judul;?></td>
                    </tr>
                    <tr>
                        <td>Pengarang : </td>
                        <td><?php echo $pengarang;?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Peminjaman : </td>
                        <td><?php echo $_SESSION["tglpinjam"];?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Pengembalian : </td>
                        <td><?php echo $_SESSION["tglkembali"];?></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <footer>
        Create With ❤️ By Kelompok 4 <br>
        Copyright &copy; 2024
    </footer>
</body>
</html>

<?php
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: index.php");
    }
?>