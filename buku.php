<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="css/style.css">
    
    <style>
       
        table{
            border: 1px solid #f2f5f7;
            text-align: center;
            margin-top: 50px;
            background-color: black;
        }
        table tr th{
            width: 170px;
            background-color: #35a9db;
            color: #fff;
            font-weight: normal;
            padding: 8px;
        }
        table tr td{
            background-color: #86dcec;
            padding: 8px;
            font-weight: bold;
        }

    </style>

</head>
<body>
    <header>
        <h3>Perpustakaan Jakarta</h3>
        <nav class="navbar">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="buku.php">Daftar Buku</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2 style="text-align: center;">Daftar Buku</h2>
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
                    <td><img src="img/gambar1.jpeg" alt="Buku Perahu Kertas" width="120px"></td>
                    <td>Perahu Kertas</td>
                    <td>Dee Lestari</td>
                    <td>Novel</td>
                    <td>2009</td>
                    <td>Bentang Pustaka</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar2.jpg" alt="Buku Ayah" width="120px"></td>
                    <td>Ayah</td>
                    <td>Andrea Hirata</td>
                    <td>Novel</td>
                    <td>2015</td>
                    <td>Bentang Pustaka</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar3.jpeg" alt="Buku Laskar Pelangi" width="120px"></td>
                    <td>Laskar Pelangi</td>
                    <td>Andrea Hirata</td>
                    <td>Novel</td>
                    <td>2005</td>
                    <td>Bentang Pustaka</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar4.jpeg" alt="Buku Melangkah" width="120px"></td>
                    <td>Melangkah</td>
                    <td>J.S Khairen</td>
                    <td>Novel</td>
                    <td>2020</td>
                    <td>Gramedia Widiasarana Indonesia</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar5.jpg" alt="Buku Easy & Simple Web Programming" width="120px"></td>
                    <td>Easy & Simple Web Programming</td>
                    <td>Rohi Abdulloh</td>
                    <td>Programming</td>
                    <td>2016</td>
                    <td>Elex Media Komputindo</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar6.jpg" alt="Buku 111 Kode HTML" width="120px"></td>
                    <td>111 Kode HMTL</td>
                    <td>Arista Prasetyo Adi</td>
                    <td>Programming</td>
                    <td>2019</td>
                    <td>Elex Media Komputindo</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar7.jpeg" alt="Buku Dasar Programming Visual Foxpro 9.0" width="120px"></td>
                    <td>Dasar Programming Visual Foxpro 9.0</td>
                    <td>Hendra Wijaya</td>
                    <td>Programming</td>
                    <td>2017</td>
                    <td>Elex Media Komputindo</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar8.jpg" alt="Buku Logika Pemprograman Python" width="120px"></td>
                    <td>Logika Pemprograman Python</td>
                    <td>Abdul Kadir</td>
                    <td>Programming</td>
                    <td>2019</td>
                    <td>Elex Media Komputindo</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar9.jpeg" alt="Buku Fisika Dasar II" width="120px"></td>
                    <td>Fisika Dasar II</td>
                    <td>Drs.Soeharto</td>
                    <td>Fisika</td>
                    <td>1995</td>
                    <td>Gramedia Pustaka</td>
                    <td><button type="submit" name="pinjam" id="pinjam">Pinjam</button></td>
                </tr>
                <tr>
                    <td><img src="img/gambar10.jpg" alt="Buku Fisika Statistik" width="120px"></td>
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
</body>
</html>