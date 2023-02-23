<?php
include ("koneksi.php");
if(isset($_POST['submit'])){
    $nama_pemilik=$_POST ['nama_pemilik'];
    $alamat=$_POST ['alamat'];
    $jenis_kelamin=$_POST ['jenis_kelamin'];
    $no_polisi=$_POST ['no_polisi'];
    $jenis_kendaraan=$_POST ['jenis_kendaraan'];
    $tgl_member=$_POST ['tgl_member'];

    $sql = "INSERT INTO tb_kendaraan(no_polisi, jenis_kendaraan, tgl_member) VALUES ('$no_polisi', '$jenis_kendaraan', '$tgl_member')";
    $query = mysqli_query($db, $sql);

    $sql = "SELECT max(id_kendaraan) AS kendaraan_id FROM tb_kendaraan LIMIT 1";
    $query = mysqli_query($db, $sql);

    $data = mysqli_fetch_array ($query);
    $kendaraan_id = $data['kendaraan_id']; 

    $sql = "INSERT INTO tb_pemilik(id_kendaraan,nama_pemilik, alamat, jenis_kelamin) VALUES ('$kendaraan_id','$nama_pemilik', '$alamat', '$jenis_kelamin')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('location:tampil.php?status=sukses');
    }else{
        header('location:tampil.php?status=gagal');
    }
}
?>