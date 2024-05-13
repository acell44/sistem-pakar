<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aksi</title>
</head>
<body>
    <?php
        session_start();
        include "koneksi.php";
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data = mysqli_query($koneksi,"select * from user where username='$username' AND password='$password'");

        $cek = mysqli_num_rows($data);
 
        if($cek > 0){
            $d = mysqli_fetch_array($data);
            $_SESSION['username'] = $username;
            $_SESSION['nama']=$d['nama'];
            header("location:beranda.php");
        }else{
            header("location:login.php?pesan=gagal");
        }
    ?>
</body>
</html>