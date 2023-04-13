<?php
if (isset($_POST['simpan'])) {
    include "config.php";
    $jurusan   =  $_POST['jurusan'];
    $kapasitas =  $_POST['kapasitas'];
    $terisi    =  $_POST['terisi'];

    $sql = "INSERT INTO jurusan set jurusan='$jurusan', kapasitas='$kapasitas', terisi='$terisi'";
    $simpan = mysqli_query($con, $sql);
    if ($simpan) {
        header('location:index.php?m=jurusan&s=tampil');
    } else {
        include "index.php?m=jurusan&s=tampil";
        echo '<script langguage="javascript">';
        echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}