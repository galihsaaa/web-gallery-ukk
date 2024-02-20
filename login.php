
<?php
    $koneksi = mysqli_connect("localhost","root","","login");
if(isset($_GET ["submit"])){
    $id = $_GET["fid"];
    $username = $_GET["fusername"];
    $password = $_GET["fpassword"];

    $query="INSERT INTO foto VALUES('$id' , '$username' , '$password')";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="tabel.php" method="get" enctype="multipart/form data">
        <div class="container">
            <h2>login form</h2>
            <form>
                <div class="input-group>
                <label for="username">ID</label>
                <input type ="text" name="fid" id="id" placeholder="enter your id" required>
            </div>
            <div class="input-group">
<label for="username">Username</label>
<input type="text" name="fusername" id="username" placeholder="Enter your username" required>
            </div>
            <div class="input-group">
<label for="username">password</label>
<input type="text" name="fpassword" id="password" placeholder="Enter your password" required>
        </div>
        <div class="new"><a href="registrasi.php">buat akun baru</a></div>
        <button type="submit" name="submit">login</button>
</form>
</div>
</form>
</body>
</html>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    margin: 0;
}

.container {
    width: 50%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #fff;
    border-radius: 5px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

.new > a{
    text-decoration: none;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>