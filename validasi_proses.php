<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $username=$_SESSION['username'];
        //koneksi ke database
        include "koneksi.php";
        //misal username budi
        //$username=uniqid('user_');

        $no=1;
        $jawab="";
        while ($no<=1){
            $pilih="$_POST[$no]";
            $jawab=$jawab.$pilih;
            $no++;
        }
        // echo "Jawaban : $jawab";
        //hasil perhitungan kepribadian
        $jawab=trim($jawab);
        $panjang=strlen($jawab);
        // echo "<br>panjang karakter : $panjang";

        //cek per karakter
        $no=1;
        $sesuai=0;
        $tidak_sesuai=0;

        while ($no<=$panjang){
            $karakter=substr($jawab,$no-1,1);
            //hitung persentase
            if ($karakter=="sesuai")
            {
                $sesuai++;
            }
            else if($karakter=="tidak sesuai")
            {
                $tidak_sesuai++;
            }
            
            $no++;
        }


        //tentukan persentase
        // $sesuai = number_format($sesuai/2);
        
        // $tidak_sesuai = number_format($tidak_sesuai);
        

        //$kepribadian="sanguitis";


        //simpan ke dalam database
        mysqli_query($koneksi,"insert into validasi values('$username','$jawab')");

        // mengalihkan halaman kembali ke index.php
        header("location:beranda.php");

    ?>
</body>
</html>