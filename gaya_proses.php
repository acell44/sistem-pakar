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
        while ($no<=30){
            $pilih="$_POST[$no]";
            $jawab=$jawab.$pilih;
            $no++;
        }
        echo "Jawaban : $jawab";
        //hasil perhitungan kepribadian
        $jawab=trim($jawab);
        $panjang=strlen($jawab);
        echo "<br>panjang karakter : $panjang";

        //cek per karakter
        $no=1;
        $visual=0;
        $auditori=0;
        $kinestetik=0;

        while ($no<=$panjang){
            $karakter=substr($jawab,$no-1,1);
            //hitung persentase
            if ($karakter=="A")
            {
                $visual++;
            }
            elseif ($karakter=="B") {
                $auditori++;
            }
            else
            {
                $kinestetik++;
            }
            
            $no++;
        }


        //tentukan persentase
        $visual = number_format($visual/3*10,2);
        
        $auditori = number_format($auditori/3*10,2);

        $kinestetik = number_format($kinestetik/3*10,2);
        

        //$kepribadian="sanguitis";


        //simpan ke dalam database
        mysqli_query($koneksi,"insert into gaya values('$username','$jawab','$visual', '$auditori', '$kinestetik')");

        // mengalihkan halaman kembali ke index.php
        header("location:beranda.php");

    ?>
</body>
</html>