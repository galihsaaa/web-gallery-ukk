<?php
    $koneksi = mysqli_connect("localhost","root","","login");

    $hasil = mysqli_query($koneksi, "SELECT * FROM halaman")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="">Tambah Data</a>
    <table border ="1">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>ID</th>
                <th>USername</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $i=1; 
                while($array = mysqli_fetch_assoc($hasil)):?>
                <td><?= $i ?></td>
                <td><?php= $row['id'] ?></td>
                <td><?php=echo $row['username'] ?></td>
                <td><?php=echo $row['password'] ?></td>
                <td><a href="">edit</a> | <a href="">hapus</a></td>
            </tr>
            <?php
            $i++;
        endwhile;?>
        </tbody>
    </table>
</body>
</html>