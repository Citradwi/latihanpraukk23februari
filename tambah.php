<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <center>
    <table border ="2">
        <h1>Input Data</h1>
        <form action = "proses-tambah.php" method ="POST">
            <form>
                    <tr>
                        <td><label for="nama_pemilik">Nama Pemilik : </label></td>
                        <td><input type="text" name="nama_pemilik"/></td>
                    </tr>
                    <tr>
                        <td><label for="alamat">Alamat : </label></td>
                        <td><input type="text" name="alamat"/></td>
                    </tr>
                    <tr>
                        <td><label for="jenis_kelamin">Jenis Kelamin : </label></td>
                        <td><input type="radio" name="jenis_kelamin" value ="laki-laki"/>Laki-laki
                        <input type="radio" name="jenis_kelamin" value ="perempuan"/>Perempuan</td>
                    </tr>
                    <tr>
                        <td><lable for="no_polisi">No Polisi : </label></td>
                        <td><input type="text" name="no_polisi"/>
                    </tr>
                    <tr>
                        <td><label for="jenis_kendaraan">Jenis Kendaraan : </label></td>
                        <td><input type="radio" name="jenis_kendaraan" value ="motor"/>Motor
                        <input type="radio" name="jenis_kendaraan" value ="mobil"/>Mobil</td>
                    </tr>
                    <tr>
                        <td><label for="tgl_member">Tgl Member : </label></td>
                        <td><input type="date" name="tgl_member"></td>
                    </tr>
                    <table>
                        <p><input type="submit" name="submit" value="submit"/></p>
                    </table>
                </table>
            </center>
    </form>
</body>
</html>