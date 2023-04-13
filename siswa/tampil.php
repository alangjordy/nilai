
<a href="?m=siswa&s=tambah" style="float:right;">Tambah Siswa</a>
    <h1>Modul Siswa</h1>
    <table class="table table-bordered table-hover table-striped">
        <tr bgcolor="#ccc">
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jurusan</th>
            <th>Pilihan</th>
        </tr>
        <?php
        require_once("config.php");
        require_once("tanggal_indo.php");
        $sql  ="SELECT jurusan.id as jid, jurusan.jurusan, siswa.id as sid, siswa.nis, siswa.nama, siswa.tempat_lahir, siswa.tanggal_lahir, siswa.jurusan_id FROM siswa JOIN jurusan ON jurusan.id=siswa.jurusan_id";
        $query=mysqli_query($con, $sql);
        if(mysqli_num_rows($query)==0){
            echo "<td colspan=5>Data Masih Kosong</td>";
        }else{
            $no=1;
            while($r=mysqli_fetch_assoc($query)){
                echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>" . $r['nis'] . "</td>";
                    echo "<td>" . $r['nama'] . "</td>";
                    echo "<td>" . $r['tempat_lahir'] . "</td>";
                    echo "<td>" . tgl_indo( $r['tanggal_lahir']) . "</td>";
                    echo "<td>" . $r['jurusan'] . "</td>";
                    echo '<td><a href="?m=siswa&s=edit&id='.$r['sid'].'" class="btn btn-warning btn-sm">Edit</a> 
                    <a href="?m=siswa&s=hapus&id='.$r['sid'].'" onclick="return confirm(\'yobana ka di hapuih ko?\')" class="btn btn-danger btn-sm">Hapus</a></td>';
                echo "</tr>";
                $no++;
            }
        }
        ?>
    </table>
    <br>