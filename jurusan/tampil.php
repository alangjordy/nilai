
<a href="?m=jurusan&s=tambah" style="float:right;">Tambah</a>
    <h1>Modul Jurusan</h1>
    <table class="table table-bordered table-hover table-striped">
        <tr bgcolor="#ccc">
            <th>No</th>
            <th>Jurusan</th>
            <th>Kapasitas</th>
            <th>Terisi</th>
            <th>Pilihan</th>
        </tr>
        <?php
        require_once("config.php");
        $sql  ="SELECT * FROM jurusan";
        $query=mysqli_query($con, $sql);
        if(mysqli_num_rows($query)==0){
            echo "<td colspan=5>Data Masih Kosong</td>";
        }else{
            $no=1;
            while($r=mysqli_fetch_assoc($query)){
                echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>" . $r['jurusan'] . "</td>";
                    echo "<td>" . $r['kapasitas'] . "</td>";
                    echo "<td>" . $r['terisi'] . "</td>";
                    echo '<td><a href="?m=jurusan&s=edit&id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a> 
                    <a href="?m=jurusan&s=hapus&id='.$r['id'].'" onclick="return confirm(\'yobana ka di hapuih ko?\')" class="btn btn-danger btn-sm">Hapus</a></td>';
                echo "</tr>";
                $no++;
            }
        }
        ?>
    </table>
    <br>