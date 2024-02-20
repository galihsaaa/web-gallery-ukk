<?php
    $koneksi = mysqli_connect("localhost","root","","galeri_foto");
if(isset($_GET ["submit"])){
    $foto = $_GET["ffoto"];
    $keterangan = $_GET["fketerangan"];
    $tanggal = $_GET["ftanggal"];

    $gambar= $_FILES["ffoto"]["name"];

    $query="INSERT INTO foto VALUES('', '$foto' , '$keterangan' , '$tanggal')";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tambah.php" method="get" enctype="multypart/form-data">
        <table>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td><input type="text" name="ffoto" id=""></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><input type="text" name="fketerangan" id=""></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><input type="text" name="ftanggal" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="submit" id="">TAMBAH DATA</button></td>
            </tr>
        </table>
        </form>
</body>
</html>