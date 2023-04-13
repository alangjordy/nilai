<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web dinamis kelas tkj 28</title>
    <link rel="shortcut icon" href="images/profil.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <h1 class="title">Aplikasi nilai</h1>
        <h3 class="desc">Tabel kelas dan siswa</h3>
        <nav id="navigation">
            <link rel="stylesheet" href="css/style.css">
            <ul>
                <li><a href="?m=home">Home</a></li>
                <li><a href="?m=about">Tentang</a></li>
                <li><a href="?m=jurusan">Jurusan</a></li>
                <li><a href="?m=siswa">Siswa</a></li>
            </ul>
        </nav>
    </header>
    <div id="contents">
        <?php
        if (isset($_GET['m'])) {
            $m = $_GET['m'];
            switch ($m) {
                case 'home': default:
                    include "home.php";
                    break;
                case 'about':
                    include "about.php";
                    break;
                case 'jurusan':
                    include "jurusan/index.php";
                    break;
                case 'siswa':
                    include "siswa/index.php";
                    break;
                    
            }
        } else {
            include('home.php');
        }
        ?>
    </div>
    <footer>
        &copy; Dibuat oleh Alang di <a href="https://muhidin.web.id" target="_blank" rel="noopener noreferrer">kelas tkj</a>
    </footer>
</body>

</html>