<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        
        button{
            padding: 10px;
            font-weight: 700;
            background-color: #909e5d;
            border: none;
            color: #fff;
            font-size: 20px;
            border-radius: 10px;
        }

        button:hover{
            color: #A91D3A;
            text-decoration: underline;
            transition: 300ms;
            cursor: pointer;
        }

        .p1{
            padding-top: 100px;
            font-weight: bold;
            font-size: 28px;
            font-family: Montserrat;
            padding-left: 15px;
        }

        .p2{
            padding-top: 25px;
            font-weight: bold;
            font-size: 24px;
            font-family: Montserrat;
            padding-left: 15px;
            line-height: 1.5em;
        }

        .p3{
            padding-left: 15px;
            font-size: 18px;
            font-family: Montserrat;
            line-height: 1.5em;
            color: #363062;
            font-weight: bold;
        }

        .perpus{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding-top: 15px;
        }

        .perpus img{
            width: 300px;
            height: 200;
            border: 1.5px solid;
            border-radius: 13px;
            box-shadow: 4px 8px 8px 0px #00000042;
            cursor: pointer;
            margin: 25px;
            transition: 300ms;
        }

        .perpus img:hover{
            filter: grayscale(1);
            transform: scale(1.03);

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
            box-shadow: 7px 0px 15px 7px rgba(0, 0, 0, 0.5);
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
                    <form action="index.php" method="post">
                        <li><button type="submit" name="logout">Logout</button></li>
                    </form>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <p class="p1">Sistem Informasi Perpustakaan Jakarta</p>
        <p class="p2">Selamat Datang <?php echo $_SESSION["username"];?></p>
        <p class="p3">Website ini dibuat untuk memudahkan masyarakat dalam meminjam buku secara online di Perpustakaan Jakarta. Dengan adanya website ini semoga bisa meningkatkan minat literasi masyarakat, karena kemampuan literasi yang baik memungkinkan seseorang untuk menganalis, memahami dan menggunakan informasi secara efektif.</p>
        <div class="perpus">
            <img src="img/perpus2.jpg" alt="">
            <img src="img/perpus1.jpg" alt="">
            <img src="img/perpus3.jpg" alt="">
        </div>
    <footer>
        Dibuat Dengan ❤️ Untuk Warga Jakarta <br>
        Copyright &copy; 2024
    </footer>
</body>
</html>