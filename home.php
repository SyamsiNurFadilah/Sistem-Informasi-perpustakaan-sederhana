<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        button{
            padding: 10px;
            background-color: #B5C18E;
            border: none;
            color: #fff;
            font-size: 18px;
        }

        button:hover{
            background-color: #A91D3A;
            transition: all .3s ease-in-out;
            border-radius: 10px;
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
    <hr>
    <main>
        
    </main>
</body>
</html>

<?php
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: index.php");
    }
?>