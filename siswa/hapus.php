<?php
if (isset($_GET['id'])) {
    include "config.php";
    $id =  $_GET['id'];

    $sql = " DELETE from siswa WHERE id='$id'";
    $simpan = mysqli_query($con, $sql);
    if ($simpan) {
        header('location:index.php?m=siswa&s=tampil');
    } else {
        include "index.php?m=siswa&s=tampil";
        echo '<script langguage="javascript">';
        echo 'alert("Data Gagal Dihapus.")';
        echo '</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}