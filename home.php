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

        .p1{
            padding-top: 100px;
            font-weight: bold;
            font-size: 28px;
            font-family: Montserrat;
            padding-left: 15px;
        }

        .p2{
            padding-top: 100px;
            font-weight: bold;
            font-size: 24px;
            font-family: Montserrat;
            padding-left: 15px;
            line-height: 1.5em;
        }

        .p3{
            padding-left: 15px;
            font-size: 18px;
            text-align: left;
            font-family: Montserrat;
            line-height: 1.5em;
            color: #363062;
            font-weight: bold;
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
    <main>
        <p class="p1">Sistem Informasi Perpustakaan Jakarta</p>
        <p class="p2">Selamat Datang <?php echo $_SESSION["username"];?></p>
        <p class="p3">Website ini dibuat untuk memudahkan masyarakat dalam meminjam buku secara online di Perpustakaan Jakarta.<br>Dengan adanya website ini semoga bisa meningkatkan minat literasi masyarakat, karena kemampuan literasi yang baik<br>  memungkinkan seseorang untuk menganalis, memahami dan menggunakan informasi secara efektif. <br></p>
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