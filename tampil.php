<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PraUKK</title>
</head>
<body>
    <center>
    <h1>Data Aplikasi Parkir</h1>
    <h4><a href=tambah.php>TAMBAH</a></h4>
    <table border="1">
        <tr>
            <td>Nama Pemilik</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>No Polisi</td>
            <td>Jenis Kendaraan</td>
            <td>Tgl Member</td>
            <td>Aksi</td>
        </tr>

        <?php
        include("koneksi.php");
        $sql="SELECT * FROM tb_pemilik INNER JOIN tb_kendaraan ON tb_pemilik.id_kendaraan= tb_pemilik.id_pemilik";
        $query= mysqli_query($db, $sql);

        while($row=mysqli_fetch_array($query)){
            echo"<tr>";
            echo"<td>".$row['nama_pemilik']."</td>";
            echo"<td>".$row['alamat']."</td>";
            echo"<td>".$row['jenis_kelamin']."</td>";
            echo"<td>".$row['no_polisi']."</td>";
            echo"<td>".$row['jenis_kendaraan']."</td>";
            echo"<td>".$row['tgl_member']."</td>";
            echo"<td>";
            echo"<a href='edit.php?id_pemilik=".$row['id_pemilik']."'>EDIT</a>|";
            echo"<a href='hapus.php?id_pemilik=".$row['id_pemilik']."'>HAPUS</a>|";
            echo"</td>";
            echo"</tr>";
        }
        ?>
        </table>
    </center>
</body>
</html>