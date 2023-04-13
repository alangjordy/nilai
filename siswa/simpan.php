<?php
if (isset($_POST['simpan'])) {
    include "config.php";
    $nis   =  $_POST['nis'];
    $nama =  $_POST['nama'];
    $tempat_lahir    =  $_POST['tempat_lahir'];
    $tanggal_lahir    =  $_POST['tanggal_lahir'];
    $jurusan_id    =  $_POST['jurusan_id'];

    $sql = "INSERT INTO siswa set nis='$nis', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jurusan_id='$jurusan_id'";
    $simpan = mysqli_query($con, $sql);
    if ($simpan) {
        header('location:index.php?m=siswa&s=tampil');
    } else {
        include "index.php?m=siswa&s=tampil";
        echo '<script langguage="javascript">';
        echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}