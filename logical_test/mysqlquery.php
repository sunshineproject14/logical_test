<?php
 
    $con = mysqli_connect("localhost", "root", "", "db_test");
    
    // $query = "SELECT mhs.nim, mhs.namamhs, ambilmk.nilai
    //         FROM mhs, ambilmk, mk
    //         WHERE mhs.nim = ambilmk.nim AND mk.kodemk = ambilmk.kodemk 
    //                 AND mk.namamk = 'KALKULUS I'";

    
    $query = "SELECT * FROM tb_matakuliah AS mka 
    RIGHT JOIN tb_mahasiswa_nilai AS mn ON mn.mk_id = mka.mk_id 
    LEFT JOIN tb_mahasiswa AS m ON m.mhs_id = mn.mhs_id WHERE mka.mk_id=2";


    // $query2 = "SELECT * FROM tb_matakuliah AS mk 
    // INNER JOIN tb_mahasiswa_nilai AS mn ON mn.mk_id = mn.mk_id WHERE max()";

    $hasil = mysqli_query($con, $query);
    
    echo "<table border='1'>";
    echo "<tr>
            <td>ID</td>
            <td>Kode Mata Kuliah</td>
            <td>Nama Mhs</td>
            <td>Nilai</td>
        </tr>";
    while ($data = mysqli_fetch_array($hasil))
    {
        echo "<tr>
            <td>".$data['mhs_id']."</td>
            <td>".$data['mk_kode']."</td>
            <td>".$data['mhs_nama']."</td>
            <td>".$data['nilai']."</td>
        </tr>";
    }
    echo "</table>";
    
?>