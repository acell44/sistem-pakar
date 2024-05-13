<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kepribadian</title>
</head>
<body>
    <?php
        session_start();

        //koneksi ke database
        include "koneksi.php";
        
        //misal username novi
        $username=$_SESSION['username'];

        //$username=uniqid('user_');
        
        $no=1;
        $jawab="";
        while ($no<=8){
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
        $sanguinis=0;
        $melankolis=0;
        $koleris=0;
        $plegmatis=0;

        while ($no<=$panjang){
            $karakter=substr($jawab,$no-1,1);
            //hitung persentase
            if ($karakter=="A")
            {
                $sanguinis++;
            }
            elseif ($karakter=="B") {
                $melankolis++;
            }
            elseif ($karakter=="C")
            {
                $koleris++;
            }
            else
            {
                $plegmatis++;
            }
            
            $no++;
        }


        //tentukan persentase
        $sanguinis = number_format($sanguinis*12.5,2);
        
        $melankolis = number_format($melankolis*12.5,2);

        $koleris = number_format($koleris*12.5,2);

        $plegmatis = number_format($plegmatis*12.5,2);
        
        //cetak persentase
        // echo "<br>sanguinis = $sanguinis";
        // echo "<br>melankolis = $melankolis";
        // echo "<br>koleris = $koleris";
        // echo "<br>plegmatis = $plegmatis";

        //$kepribadian="sanguitis";


        //simpan ke dalam database
        mysqli_query($koneksi,"insert into kepribadian values('$username','$jawab','$sanguinis', '$melankolis', '$koleris', '$plegmatis')");

        // mengalihkan halaman kembali ke index.php
        header("location:beranda.php");

    ?>
</body>
</html>