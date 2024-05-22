<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
       
    <style>
         body{
            background-color: #e6ceaf;
        }
        
        table{
            border: 1px solid black;
            text-align: center;
            margin-top: 50px;
            background-color: black;
            font-family: Montserrat;
        }
        table tr th{
            width: 170px;
            background-color: #909e5d;
            color: black;
            font-weight: normal;
            padding: 8px;
            font-size: 18px;
        }
        table tr td{
            background-color: #EADBC8;
            padding: 8px;
            font-weight: normal;
            font-size: 18px;
        }
        table tr td img{
            width: 120px;
        }

        button{
            background-color: #666efa;
            padding: 8px;
            border-radius: 8px;
            color: black;
            font-family: Montserrat;
            font-weight: bold;
        }

        button:hover{
            cursor: pointer;
            background-color: #414afd;
            transition: all .3s ease-in-out;
        }

        footer{
            position: sticky;
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
    <div class="container">
            <nav class="bar">
                <div class="logo">
                    <div class="firstname">Perpustakaan</div>
                    <div class="lastname">Jakarta</div>
                </div>
                <ul class="navigation">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="buku.php">Daftar Buku</a></li>
                    <li><a href="datapinjam.php">Data Pinjam</a></li>
                </ul>
            </nav>
        </div>
    <main>
        <h2 style="text-align: center; margin-top:100px; font-family:Montserrat;">Daftar Buku</h2>
        <form action="peminjaman.php" method="post">
            <table>
                <tr>
                    <th>Gambar Buku</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Kategori</th>
                    <th>Tahun Terbit</th>
                    <th>Penerbit</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td><img src="img/gambar1.jpeg" alt="Buku Perahu Kertas"></td>
                    <td>Perahu Kertas</td>
                    <td>Dee Lestari</td>
                    <td>Novel</td>
                    <td>2009</td>
                    <td>Bentang Pustaka</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar2.jpg" alt="Buku Ayah"></td>
                    <td>Ayah</td>
                    <td>Andrea Hirata</td>
                    <td>Novel</td>
                    <td>2015</td>
                    <td>Bentang Pustaka</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar3.jpeg" alt="Buku Laskar Pelangi"></td>
                    <td>Laskar Pelangi</td>
                    <td>Andrea Hirata</td>
                    <td>Novel</td>
                    <td>2005</td>
                    <td>Bentang Pustaka</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar4.jpeg" alt="Buku Melangkah"></td>
                    <td>Melangkah</td>
                    <td>J.S Khairen</td>
                    <td>Novel</td>
                    <td>2020</td>
                    <td>Gramedia Widiasarana Indonesia</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar5.jpg" alt="Buku Easy & Simple Web Programming"></td>
                    <td>Easy & Simple Web Programming</td>
                    <td>Rohi Abdulloh</td>
                    <td>Programming</td>
                    <td>2016</td>
                    <td>Elex Media Komputindo</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar6.jpg" alt="Buku 111 Kode HTML"></td>
                    <td>111 Kode HMTL</td>
                    <td>Arista Prasetyo Adi</td>
                    <td>Programming</td>
                    <td>2019</td>
                    <td>Elex Media Komputindo</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar7.jpeg" alt="Buku Dasar Programming Visual Foxpro 9.0"></td>
                    <td>Dasar Programming Visual Foxpro 9.0</td>
                    <td>Hendra Wijaya</td>
                    <td>Programming</td>
                    <td>2017</td>
                    <td>Elex Media Komputindo</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar8.jpg" alt="Buku Logika Pemprograman Python"></td>
                    <td>Logika Pemprograman Python</td>
                    <td>Abdul Kadir</td>
                    <td>Programming</td>
                    <td>2019</td>
                    <td>Elex Media Komputindo</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar9.jpeg" alt="Buku Fisika Dasar II"></td>
                    <td>Fisika Dasar II</td>
                    <td>Drs.Soeharto</td>
                    <td>Fisika</td>
                    <td>1995</td>
                    <td>Gramedia Pustaka</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar10.jpg" alt="Buku Fisika Statistik"></td>
                    <td>Fisika Statistik</td>
                    <td>Dr.Juniastel Rajagukguk,M.Si</td>
                    <td>Fisika</td>
                    <td>2023</td>
                    <td>Sinar Grafika</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
            </table>
        </form>
    </main>
    <footer>
        Create With ❤️ By Kelompok 4 <br>
        Copyright &copy; 2024
    </footer>
</body>
</html>

<?php
    if(isset($_POST['logout'])){
        session_destroy();
        header("Location: index.php");
    }
?>