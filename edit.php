<?php
include("koneksi.php");
if(!isset($_GET['id_pemilik'])){
    header("location:tampil.php");
}

$id_pemilik=$_GET['id_pemilik'];
$sql="SELECT * FROM tb_pemilik INNER JOIN tb_kendaraan ON tb_pemilik.id_kendaraan=tb_pemilik.id_pemilik
WHERE tb_kendaraan.id_kendaraan='$id_pemilik'";
$query=mysqli_query($db, $sql);
$row=mysqli_fetch_assoc($query);
?>

<html>
    <head>
</head>
<body>
    <center>
        <h4>EDIT</h4>
        <table border="0">
            <form action ="proses-edit.php" method="POST">
                <input type="hidden" name="id_pemilik" value="<?php echo $row['id_pemilik']?>" />
                <tr>
                    <td><label for="nama_pemilik">Nama pemilik :</td>
                    <td><input type="text" name="nama_pemilik" value="<?php echo $row['nama_pemilik']?>"/></td>
                </tr>
                <tr>
                    <td><label for="alamat">Satuan :</td>
                    <td><input type="text" name="alamat" value="<?php echo $row['alamat']?>"/></td>
                </tr>
                <tr>
                        <td><label for="jenis_kelamin">Jenis Kelamin : </label></td>
                        <td><input type="radio" name="jenis_kelamin" value ="laki-laki"/>LAKI LAKI
                        <input type="radio" name="jenis_kelamin" value ="perempuan"/>PEREMPUAN</td>
                </tr>
                <tr>
                    <td><label for="no_polisi">No Polisi :</td>
                    <td><input type="text" name="no_polisi" value="<?php echo $row['no_polisi']?>"/></td>
                </tr>
                <tr>
                        <td><label for="jenis_kendaraan">Jenis Kendaraan : </label></td>
                        <td><input type="radio" name="jenis_kendaraan" value ="motor"/>MOTOR
                        <input type="radio" name="jenis_kendaraan" value ="mobil"/>MOBIL</td>
                </tr>
                <tr>
                    <td><label for="tgl_member">Tgl Member :</td>
                    <td><input type="date" name="tgl_member" value="<?php echo $row['tgl_member']?>"/></td>
                </tr>
                
                <table>
                    <p><input type="submit" name="edit" value="edit data"></td>
                </form>
            </table>
</center>
        </body>
        </html>