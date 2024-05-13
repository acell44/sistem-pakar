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
        $nama=$_SESSION['nama'];
    ?>
    <div class="container">
    
        <div class="nav">
                <div class="kiri">
                    <img src="logo.png" alt="">
                </div>
                <div class="kanan">
                    <!-- Hai < ? =$nama?>, Tolong Berikan Penilaian Anda Ya! -->
                </div>
        </div>
        <br>

        <form action="validasi_proses.php" method="POST">
            <?php
                include "koneksi.php";
                $data = mysqli_query($koneksi,"select * from validasi_soal");
                $no=1;
                while($d = mysqli_fetch_array($data))
                {
            ?>
                    <div class="bingkai">
                        <div class="soal"><?=$d['soal'];?></div>
                        <div class="pilihan">
                            <input type='radio' required name='<?=$no;?>' value='sesuai'>
                            <?=$d['pilihan1'];?> 
                        </div>
                        <div class="pilihan">
                            <input type='radio' name='<?=$no;?>' value='tidak sesuai'>
                            <?=$d['pilihan2'];?>  
                        </div>
                    </div>
                    <br>			
            <?php
                $no++;
                }
            ?>
                <div class="tombol2">
                    <input type="submit" value="SELESAI">
                </div>
        </form>
    </div>
</body>
</html>