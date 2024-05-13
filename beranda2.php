<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKTB</title>
    <link rel="icon" href="TKTB.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        session_start();
        $username=$_SESSION['username'];
        $nama=$_SESSION['nama'];
    ?>
    <div class="container">
        <div class="nav">
            <div class="kiri">
                <img src="logo.png" alt="">
            </div>
            <div class="kanan">
                <ul>
                    <li><a href="beranda.php">BERANDA</a></li>
                    <li><a href="home.php" onclick="return confirm('Apakah Anda Yakin Akan Logout?');">LOGOUT</a></li>
                </ul>
            </div>
        </div>

        <div class="kontenku">
            <div class="hai">
                Hai <i><?=$nama?></i> selamat datang di aplikasi tes tipe kepribadiaan dan gaya belajar.
                <br><br>
            </div>
            <div class="tiga">

                <div class="kepribadian">
                    <?php
                            include "koneksi.php";
                            $dataJW = mysqli_query($koneksi,"select * from kepribadian where jawaban='$jawaban'"); 
                            $cekJW = mysqli_num_rows($dataJW);
                            if ($cekJW>0)
                            {
                            ?>
                                <img src="1.png" alt="">
                                <!-- <a>Gaya Belajar  &#10004;</a> -->
                            
                                <a>Tes Gaya Belajar &#10004; </a>
                            <?php
                            }
                            else
                            {
                            ?>
                                <img src="1.png" alt="">
                                <a>Tes Kepribadian</a>
                            <?php
                            }
                    ?>
                </div>


                <div class="gaya">

                    <!-- cek di tabel kepribadian, adakah username yg sedang aktif
                    jika belum tampilkan gambar terkunci dan tombol tidak aktif -->
                    <?php
                        include "koneksi.php";
                        $data = mysqli_query($koneksi,"select * from kepribadian where username='$username'"); 
                        $cek = mysqli_num_rows($data);
                        if ($cek>0)
                        {
                        ?>
                            <img src="2.png" alt="">
                            <!-- <a>Gaya Belajar  &#10004;</a> -->
                           
                            <a href="gaya.php">Tes Gaya Belajar</a>
                        <?php
                        }
                        else
                        {
                        ?>
                            <img src="2key.png" alt="">
                            <a>Tes Gaya Belajar</a>
                        <?php
                        }
                    ?>
                </div>
                <div class="tampil">
                <?php
                        include "koneksi.php";
                        $data = mysqli_query($koneksi,"select * from kepribadian where username='$username'"); 
                        $cek = mysqli_num_rows($data);
                        
                        

                        if ($cek>0)
                        {
                            $data2 = mysqli_query($koneksi,"select * from gaya where username='$username'"); 
                            $cek2 = mysqli_num_rows($data2);
                            if ($cek2>0)
                            {
                                ?>
                                    <img src="3.png" alt="">
                                    <a href="tampil.php">Lihat Hasil Tes</a>
                                
                                    <!-- <a href="gaya.php">Tes Gaya Belajar</a> -->
                                <?php
                            }
                            else
                            {
                                ?>
                                    <img src="3key.png" alt="">
                                    <a>Lihat Hasil Tes</a>
                                <?php
                            }
                        }
                        else
                        {
                        ?>
                            <img src="3key.png" alt="">
                            <a>Lihat Hasil Tes</a>
                        <?php
                        }

                    ?>

                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>

