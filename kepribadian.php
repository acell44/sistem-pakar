<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TKTB</title>
    <link rel="icon" href="TKTB.png">
    <link rel="stylesheet" href="style.css">
    <!-- <style>
        p{
            padding:0;
            margin:0;
        }
    </style> -->
</head>
<body>
<?php
        session_start();
        $nama=$_SESSION['nama'];
    ?>
    <div class="container">

    <div class="nav">
            <div class="kiri">
                    Hai <?=$nama?>, Selamat Mengerjakan!
            </div>
            <div class="kanan">
                <ul>
                    <li><a href="beranda.php">Beranda</a></li>
            </div>
    </div>

    <br>

    <form action="kepribadian_proses.php" method="POST">
    <?php

        include "koneksi.php";
        $data = mysqli_query($koneksi,"select * from kepribadian_soal");
        $no=1;
        while($d = mysqli_fetch_array($data))
		{
            ?>
            <div class="bingkai">
                <div class="soal"><img src="<?=$d['soal']?>"></div>

                <div class="pilihan">
                    <input type='radio' required name='<?=$no;?>' value='A'>
                    <?=$d['pilihan1'];?> 
                </div>
                <div class="pilihan">
                    <input type='radio' name='<?=$no;?>' value='B'>
                    <?=$d['pilihan2'];?>  
                </div>
                <div class="pilihan">
                    <input type='radio' name='<?=$no;?>' value='C'>
                    <?=$d['pilihan3'];?>  
                </div>
                <div class="pilihan">
                    <input type='radio' name='<?=$no;?>' value='D'>
                    <?=$d['pilihan4'];?> 
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