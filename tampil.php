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
    
        <div class="latarmu">
           <div class="hasilku">
              <h2>HASIL TES TIPE KEPRIBADIAN DAN TES GAYA BELAJAR</h2>
              <hr>
              <br>
               <?php
                  session_start();
                  $username=$_SESSION['username'];
                  $nama=$_SESSION['nama'];

                  echo "Halo $nama, terimakasih telah mengikuti Tes Kepribadian dan Tes Gaya Belajar! Berikut adalah rekap hasil tes yang telah kamu lakukan: <br>";

                  ?>
                  <div class="hasilkuku">
                     <div class="satu">
                        <?php
                        echo "<br><h3>Hasil Tes Tipe Kepribadian</h3><br>";
                        include "koneksi.php";
                        // $data = mysqli_query($koneksi, "select * from kepribadian,gaya WHERE kepribadian.username=gaya.username AND username='$username'");
                        $data = mysqli_query($koneksi, "select * from gaya,kepribadian WHERE gaya.username=kepribadian.username AND gaya.username='$username'");
                        
                        while($d = mysqli_fetch_array($data))
                        {
                           $jwA=$d['sanguinis'];
                           $jwB=$d['melankolis'];
                           $jwC=$d['koleris'];
                           $jwD=$d['plegmatis'];

                           $A=$d['visual'];
                           $B=$d['auditori'];
                           $C=$d['kinestetik'];
                           

                           if ($jwA>$jwB&&$jwA>$jwC&&$jwA>$jwD){
                              ?> <img src="sanguinis.png" alt=""> <?php
                              echo "<br>Tipe Kepribadian Anda adalah Sanguinis";
                              echo "<p>Presentase : $jwA %</p>";
                              
                              echo "<br><p>
                              Cairan yang lebih dominan dalam tubuh Anda yaitu cairan Sanguis (darah). Tipe oerang sanguinis cenderung memiliki karakter yang periang, optimis, mudah bergaul, banyak bicara, dan percaya diri. Menyukai kesenangan sehingga jarang sekali membiarkan hati untuk bersedih terlalu lama. Kelemahan orang tipe sanguinis umumnya pelupa, mudah marah, ingin dipuji, dan tidak konsisten.
                              </p>";
                              
                           }
                           else if ($jwB>$jwA&&$jwB>$jwC&&$jwB>$jwD){
                              ?> <img src="melankolis.png" alt=""> <?php
                              echo "<br>Tipe Kepribadian Anda adalah Melankolis";
                              echo "<p>Presentase : $jwB %</p>";
                              
                              echo "<br><p>
                              Cairan yang lebih dominan dalam tubuh Anda yaitu cairan Melanchole (Empedu Hitam). Orang dengan tipe kepribadian ini memiliki karakter yang gigih, penuh perhatian, rela berkorban, sensitif, setia, perfeksionis, dan perencana. Kelemahannya pemurung, sedih, pesimis, dan kurang percaya diri. Merasa tertekan dengan masa lalunya, sulit menyesuaikan diri, terlalu sensitive, dan rewel.
                              </p>";
                              
                           }
                           else if ($jwC>$jwA&&$jwC>$jwB&&$jwC>$jwD){
                              ?> <img src="koleris.png" alt=""> <?php
                              echo "<br>Tipe Kepribadian Anda adalah Koleris";
                              echo "<p>Presentase : $jwC %</p>";
                              
                              echo "<br><p>
                              Cairan yang lebih dominan dalam tubuh Anda yaitu cairan Chole (Empedu Kuning). Tipe orang dengan kepribadian Korelis cenderung memiliki karakter  yang optimis, hidup penuh semangat, serta memiliki daya juang besar. Tipe orang yang berapi-api, aktif, praktis, cekatan, dan mandiri. Menyukai penampilan, kemegahan dan formalitas, penuh dengan kebanggaan dan cinta diri sendiri. Kelemahanya, orang tipe koleris mudah marah, pendendam, mendominasi, tidak peka, dan tidak toleran.
                              </p>";
                              
                           }
                           else if ($jwD>$jwA&&$jwD>$jwB&&$jwD>$jwC){
                              ?> <img src="plegmatis.png" alt=""> <?php
                              echo "<br>Tipe Kepribadian Anda adalah Plegmatis";
                              echo "<p>Presentase : $jwD %</p>";
                              
                              echo "<br><p>
                              Cairan yang lebih dominan dalam tubuh Anda yaitu Plegma (lendir). tipe orang dengan kepribadian plegmatis cenderung memiliki karakter yang tenang, mudah beradaptasi, sabar, toleran, menyenagkan, pandai mengendalikan diri, konsisten, dan menjadi pendengar yang baik. Kelemahan dari tipe ini adalah suka melamun, ragu-ragu, datar, tanpa tujuan, dan mudah cemas.
                              </p>";
                              
                           }
                           else if ($jwA>$jwC&&$jwA>$jwD&&$jwA==$jwB){
                              ?> <img src="sanguinis_melankolis.png" alt=""> <?php
                              echo "<br>Tipe Kepribadian Anda adalah Sanguinis dan  Melankolis";
                              echo "<p>Presentase Sanguinis : $jwA % dan Melankolis : $jwB %</p>";
                              
                              echo "<br><p>
                              Anda memiliki dua cairan yang dominan dalam tubuh Anda yaitu cairan Sanguis (darah) dan Melanchole (Empedu Hitam). Sebagai tipe orang sanguinis, anda cenderung memiliki karakter yang periang, optimis, mudah bergaul, banyak bicara, dan percaya diri. Menyukai kesenangan sehingga jarang sekali membiarkan hati untuk bersedih terlalu lama. Kelemahan orang tipe sanguinis umumnya pelupa, mudah marah, ingin dipuji, dan tidak konsisten. Dan sebagai orang dengan tipe kepribadian melankolis memiliki karakter yang gigih, penuh perhatian, rela berkorban, sensitif, setia, perfeksionis, dan perencana. Kelemahannya pemurung, sedih, pesimis, dan kurang percaya diri. Merasa tertekan dengan masa lalunya, sulit menyesuaikan diri, terlalu sensitive, dan rewel.
                              </p>";
                              
                           }
                           else if ($jwB>$jwC&&$jwB>$jwD&&$jwB==$jwA){
                              ?> <img src="sanguinis_melankolis.png" alt=""> <?php
                              echo "<br>Tipe Kepribadian Anda adalah Sanguinis dan  Melankolis";
                              echo "<p>Presentase Sanguinis : $jwA % dan Melankolis : $jwB %</p>";
                              
                              echo "<br><p>
                              Anda memiliki dua cairan yang dominan dalam tubuh Anda yaitu cairan Sanguis (darah) dan Melanchole (Empedu Hitam). Sebagai tipe orang sanguinis, anda cenderung memiliki karakter yang periang, optimis, mudah bergaul, banyak bicara, dan percaya diri. Menyukai kesenangan sehingga jarang sekali membiarkan hati untuk bersedih terlalu lama. Kelemahan orang tipe sanguinis umumnya pelupa, mudah marah, ingin dipuji, dan tidak konsisten. Dan sebagai orang dengan tipe kepribadian melankolis memiliki karakter yang gigih, penuh perhatian, rela berkorban, sensitif, setia, perfeksionis, dan perencana. Kelemahannya pemurung, sedih, pesimis, dan kurang percaya diri. Merasa tertekan dengan masa lalunya, sulit menyesuaikan diri, terlalu sensitive, dan rewel.
                              </p>";
                             
                           }

                           else if ($jwA>$jwB&&$jwA>$jwD&&$jwA==$jwC){
                              ?> <img src="sanguinis_koleris.png" alt=""> <?php
                              echo "<br>Tipe Kepribadian Anda adalah Sanguinis dan Koleris";
                              echo "<p>Presentase Sanguinis : $jwA % dan Koleris : $jwC %</p>";
                              
                              echo "<br><p>
                              Anda memiliki dua cairan yang dominan dalam tubuh Anda yaitu cairan Sanguis (darah) dan Chole (Empedu Kuning). Sebagai tipe orang sanguinis, anda cenderung memiliki karakter yang periang, optimis, mudah bergaul, banyak bicara, dan percaya diri. Menyukai kesenangan sehingga jarang sekali membiarkan hati untuk bersedih terlalu lama. Kelemahan orang tipe sanguinis umumnya pelupa, mudah marah, ingin dipuji, dan tidak konsisten. Dan sebagai orang dengan tipe kepribadian Koleris Anda cenderung memiliki karakter  yang optimis, hidup penuh semangat, serta memiliki daya juang besar. Tipe orang yang berapi-api, aktif, praktis, cekatan, dan mandiri. Menyukai penampilan, kemegahan dan formalitas, penuh dengan kebanggaan dan cinta diri sendiri. Kelemahanya, orang tipe koleris mudah marah, pendendam, mendominasi, tidak peka, dan tidak toleran.
                              </p>";
                              
                           }
                           else if ($jwC>$jwB&&$jwC>$jwD&&$jwC==$jwA){
                              ?> <img src="sanguinis_koleris.png" alt=""> <?php
                              echo "<br>Tipe Kepribadian Anda adalah Sanguinis dan  Koleris";
                              echo "<p>Presentase Sanguinis : $jwA % dan Koleris : $jwC %</p>";
                              
                              echo "<br><p>
                              Anda memiliki dua cairan yang dominan dalam tubuh Anda yaitu cairan Sanguis (darah) dan Chole (Empedu Kuning). Sebagai tipe orang sanguinis, anda cenderung memiliki karakter yang periang, optimis, mudah bergaul, banyak bicara, dan percaya diri. Menyukai kesenangan sehingga jarang sekali membiarkan hati untuk bersedih terlalu lama. Kelemahan orang tipe sanguinis umumnya pelupa, mudah marah, ingin dipuji, dan tidak konsisten. Dan sebagai orang dengan tipe kepribadian Koleris Anda cenderung memiliki karakter  yang optimis, hidup penuh semangat, serta memiliki daya juang besar. Tipe orang yang berapi-api, aktif, praktis, cekatan, dan mandiri. Menyukai penampilan, kemegahan dan formalitas, penuh dengan kebanggaan dan cinta diri sendiri. Kelemahanya, orang tipe koleris mudah marah, pendendam, mendominasi, tidak peka, dan tidak toleran.
                              </p>";
                              
                           }
                           else if ($jwA>$jwB&&$jwA>$jwC&&$jwA==$jwD){
                              ?> <img src="sanguinis_plegmatis.png" alt=""> <?php
                              echo "<br>Tipe Kepribadian Anda adalah Sanguinis dan Plegmatis";
                              echo "<p>Presentase Sanguinis : $jwA % dan Plegmatis : $jwD %</p>";
                              
                              echo "<br><p>
                              Anda memiliki dua cairan yang dominan dalam tubuh Anda yaitu cairan Sanguis (darah) dan Plegma (Lendir). Sebagai tipe orang sanguinis, anda cenderung memiliki karakter yang periang, optimis, mudah bergaul, banyak bicara, dan percaya diri. Menyukai kesenangan sehingga jarang sekali membiarkan hati untuk bersedih terlalu lama. Kelemahan orang tipe sanguinis umumnya pelupa, mudah marah, ingin dipuji, dan tidak konsisten. Dan sebagai tipe orang dengan kepribadian plegmatis, Anda cenderung memiliki karakter yang tenang, mudah beradaptasi, sabar, toleran, menyenagkan, pandai mengendalikan diri, konsisten, dan menjadi pendengar yang baik. Kelemahan dari tipe ini adalah suka melamun, ragu-ragu, datar, tanpa tujuan, dan mudah cemas.
                              </p>";
                              
                           }
                           else if ($jwD>$jwB&&$jwD>$jwC&&$jwD==$jwA){
                              ?> <img src="sanguinis_plegmatis.png" alt=""> <?php
                              echo "<br>Tipe Kepribadian Anda adalah Sanguinis dan  Plegmatis";
                              echo "<p>Presentase Sanguinis : $jwA % dan Plegmatis : $jwD %</p>";
                              
                              echo "<br><p>
                              Anda memiliki dua cairan yang dominan dalam tubuh Anda yaitu cairan Sanguis (darah) dan Plegma (Lendir). Sebagai tipe orang sanguinis, anda cenderung memiliki karakter yang periang, optimis, mudah bergaul, banyak bicara, dan percaya diri. Menyukai kesenangan sehingga jarang sekali membiarkan hati untuk bersedih terlalu lama. Kelemahan orang tipe sanguinis umumnya pelupa, mudah marah, ingin dipuji, dan tidak konsisten. Dan sebagai tipe orang dengan kepribadian plegmatis, Anda cenderung memiliki karakter yang tenang, mudah beradaptasi, sabar, toleran, menyenagkan, pandai mengendalikan diri, konsisten, dan menjadi pendengar yang baik. Kelemahan dari tipe ini adalah suka melamun, ragu-ragu, datar, tanpa tujuan, dan mudah cemas.
                              </p>";
                             
                           }

                           else if ($jwB>$jwA&&$jwB>$jwD&&$jwB==$jwC){
                              ?> <img src="melankolis_koleris.png" alt=""> <?php
                              echo "<br>Tipe Kepribadian Anda adalah Melankolis dan Koleris";
                              echo "<p>Presentase Melankolis : $jwB % dan Koleris : $jwC %</p>";
                              
                              echo "<br><p>
                              Anda memiliki dua cairan yang dominan dalam tubuh Anda yaitu cairan Melanchole (Empedu Hitam) dan Chole (Empedu Kuning). sebagai orang dengan tipe kepribadian melankolis, Anda memiliki karakter yang gigih, penuh perhatian, rela berkorban, sensitif, setia, perfeksionis, dan perencana. Kelemahannya pemurung, sedih, pesimis, dan kurang percaya diri. Merasa tertekan dengan masa lalunya, sulit menyesuaikan diri, terlalu sensitive, dan rewel. Disisi lain, sebagai orang dengan tipe kepribadian Korelis cenderung memiliki karakter  yang optimis, hidup penuh semangat, serta memiliki daya juang besar. Tipe orang yang berapi-api, aktif, praktis, cekatan, dan mandiri. Menyukai penampilan, kemegahan dan formalitas, penuh dengan kebanggaan dan cinta diri sendiri. Kelemahanya, orang tipe koleris mudah marah, pendendam, mendominasi, tidak peka, dan tidak toleran.
                              </p>";
                              
                           }
                           else if ($jwC>$jwA&&$jwC>$jwD&&$jwC==$jwB){
                              ?> <img src="melankolis_koleris.png" alt=""> <?php
                              echo "<br>Tipe Kepribadian Anda adalah Melankolis dan  Koleris";
                              echo "<p>Presentase Melankolis : $jwB % dan Koleris : $jwC %</p>";
                              
                              echo "<br><p>
                              Anda memiliki dua cairan yang dominan dalam tubuh Anda yaitu cairan Melanchole (Empedu Hitam) dan Chole (Empedu Kuning). sebagai orang dengan tipe kepribadian melankolis, Anda memiliki karakter yang gigih, penuh perhatian, rela berkorban, sensitif, setia, perfeksionis, dan perencana. Kelemahannya pemurung, sedih, pesimis, dan kurang percaya diri. Merasa tertekan dengan masa lalunya, sulit menyesuaikan diri, terlalu sensitive, dan rewel. Disisi lain, sebagai orang dengan tipe kepribadian Korelis cenderung memiliki karakter  yang optimis, hidup penuh semangat, serta memiliki daya juang besar. Tipe orang yang berapi-api, aktif, praktis, cekatan, dan mandiri. Menyukai penampilan, kemegahan dan formalitas, penuh dengan kebanggaan dan cinta diri sendiri. Kelemahanya, orang tipe koleris mudah marah, pendendam, mendominasi, tidak peka, dan tidak toleran.
                              </p>";
                              
                           }
                           else if ($jwB>$jwA&&$jwB>$jwC&&$jwB==$jwD){
                              ?> <img src="melankolis_plegmatis.png" alt=""> <?php
                              echo "<br>Tipe Kepribadian Anda adalah Melankolis dan Plegmatis";
                              echo "<p>Presentase Melankolis : $jwB % dan Plegmatis : $jwD %</p>";
                              
                              echo "<br><p>
                              Anda memiliki dua cairan yang dominan dalam tubuh Anda yaitu cairan Melanchole (Empedu Hitam) dan Chole (Empedu Kuning). sebagai orang dengan tipe kepribadian melankolis, Anda memiliki karakter yang gigih, penuh perhatian, rela berkorban, sensitif, setia, perfeksionis, dan perencana. Kelemahannya pemurung, sedih, pesimis, dan kurang percaya diri. Merasa tertekan dengan masa lalunya, sulit menyesuaikan diri, terlalu sensitive, dan rewel. Disisi lain, sebagai orang dengan tipe kepribadian Plegmatis cenderung memiliki karakter yang tenang, mudah beradaptasi, sabar, toleran, menyenagkan, pandai mengendalikan diri, konsisten, dan menjadi pendengar yang baik. Kelemahan dari tipe ini adalah suka melamun, ragu-ragu, datar, tanpa tujuan, dan mudah cemas.
                              </p>";
                              
                           }
                           else if ($jwD>$jwA&&$jwD>$jwC&&$jwD==$jwB){
                              ?> <img src="melankolis_plegmatis.png" alt=""> <?php
                              echo "<br>Tipe Kepribadian Anda adalah Melankolis dan  Plegmatis";
                              echo "<p>Presentase Melankolis : $jwB % dan Plegmatis : $jwD %</p>";
                              
                              echo "<br><p>
                              Anda memiliki dua cairan yang dominan dalam tubuh Anda yaitu cairan Melanchole (Empedu Hitam) dan Chole (Empedu Kuning). sebagai orang dengan tipe kepribadian melankolis, Anda memiliki karakter yang gigih, penuh perhatian, rela berkorban, sensitif, setia, perfeksionis, dan perencana. Kelemahannya pemurung, sedih, pesimis, dan kurang percaya diri. Merasa tertekan dengan masa lalunya, sulit menyesuaikan diri, terlalu sensitive, dan rewel. Disisi lain, sebagai orang dengan tipe kepribadian Plegmatis cenderung memiliki karakter yang tenang, mudah beradaptasi, sabar, toleran, menyenagkan, pandai mengendalikan diri, konsisten, dan menjadi pendengar yang baik. Kelemahan dari tipe ini adalah suka melamun, ragu-ragu, datar, tanpa tujuan, dan mudah cemas.
                              </p>";
                              
                           }

                           else if ($jwC>$jwA&&$jwC>$jwB&&$jwC==$jwD){
                              ?> <img src="koleris_plegmatis.png" alt=""> <?php
                              echo "<br>Tipe Kepribadian Anda adalah Koleris dan Plegmatis";
                              echo "<p>Presentase Koleris : $jwC % dan Plegmatis : $jwD %</p>";
                             
                              echo "<br><p>
                              Anda memiliki dua cairan yang dominan dalam tubuh Anda yaitu cairan Chole (Empedu Kuning) dan Plegma (Lendir). Sebagai orang dengan tipe kepribadian Plegmatis cenderung memiliki karakter yang tenang, mudah beradaptasi, sabar, toleran, menyenagkan, pandai mengendalikan diri, konsisten, dan menjadi pendengar yang baik. Kelemahan dari tipe ini adalah suka melamun, ragu-ragu, datar, tanpa tujuan, dan mudah cemas. Disisi lain, sebagai orang dengan tipe kepribadian plegmatis, Anda cenderung memiliki karakter yang tenang, mudah beradaptasi, sabar, toleran, menyenagkan, pandai mengendalikan diri, konsisten, dan menjadi pendengar yang baik. Kelemahan dari tipe ini adalah suka melamun, ragu-ragu, datar, tanpa tujuan, dan mudah cemas.
                              </p>";
                              
                           }
                           else if ($jwD>$jwA&&$jwD>$jwB&&$jwD==$jwC){
                              ?> <img src="koleris_plegmatis.png" alt=""> <?php
                              echo "<br>Tipe Kepribadian Anda adalah Koleris dan  Plegmatis";
                              echo "<p>Presentase Koleris : $jwC % dan Plegmatis : $jwD %</p>";
                              echo "<br><p>
                              Anda memiliki dua cairan yang dominan dalam tubuh Anda yaitu cairan Chole (Empedu Kuning) dan Plegma (Lendir). Sebagai orang dengan tipe kepribadian Plegmatis cenderung memiliki karakter yang tenang, mudah beradaptasi, sabar, toleran, menyenagkan, pandai mengendalikan diri, konsisten, dan menjadi pendengar yang baik. Kelemahan dari tipe ini adalah suka melamun, ragu-ragu, datar, tanpa tujuan, dan mudah cemas. Disisi lain, sebagai orang dengan tipe kepribadian plegmatis, Anda cenderung memiliki karakter yang tenang, mudah beradaptasi, sabar, toleran, menyenagkan, pandai mengendalikan diri, konsisten, dan menjadi pendengar yang baik. Kelemahan dari tipe ini adalah suka melamun, ragu-ragu, datar, tanpa tujuan, dan mudah cemas.
                              </p>";
                             
                           }
                           else{
                              ?> <img src="campur.png" alt=""> <?php
                              echo "<br>Tipe Kepribadian Anda adalah Dominan pada semua kepribadian seperti sanguinis, melankolis, koleris, dan plegmatis.";
                              echo "<br><p>
                              
                              </p>";
                              
                              
                           }
                           ?>
                     </div>
                     
                     <div class="dua">
                        <?php                 
                              echo "<br><h3>Hasil Tes Gaya Belajar</h3><br>";
                              if ($A>$B&&$A>$C){
                                 ?> <img src="visual.png" alt=""> <?php
                                 echo "<br>Tipe Gaya Belajar Anda adalah Visual";
                                 echo "<p>Presentase : $A %</p>";
                                 echo "<br><p>
                                 Anda memiliki tipe gaya belajar visual dimana Anda akan memanfaatkan kemampuan mata atau visual secara maksimal dalam kegiatan belajar seperti membaca, menggambar, dan mengamati. Gaya belajar ini harus melihat bahasa tubuh dan eksekusi pengajar untuk mengerti materi yang diajarkan.
                                 </p>";
                              }
                              else if ($B>$A&&$B>$C){
                                 ?> <img src="auditori.png" alt=""> <?php
                                 echo "<br>Tipe Gaya Belajar Anda adalah Auditori";
                                 echo "<p>Presentase : $B %</p>";
                                 echo "<br><p>
                                 Anda memiliki tipe gaya belajar Auditori, sehingga Anda lebih mengandalkan kemampuan mendengar. Orang dengan gaya auditori melakukan pembelajaran dengan menyimak, mendengarkan  materi  yang disampaikan oleh pengajar. Biasanya  anak auditori  cenderung memiliki ciri-ciri cepat dalam berbicara. 
                                 </p>";
                              }
                              else if ($C>$A&&$C>$B){
                                 ?> <img src="kinestetik.png" alt=""> <?php
                                 echo "<br>Tipe Gaya Belajar Anda adalah Kinestetik";
                                 echo "<p>Presentase : $C %</p>";
                                 
                                 echo "<br><p>
                                 Anda memiliki tipe gaya  belajar kinestetik sehingga  lebih  suka  belajar langsung.  Anda merasa  sulit  belajar berjam-jam dikelas  karena  keinginan  untuk  beraktifitas.  Metode  pembelajaran yang baik untuk tipe anak kinestetik yaitu dengan memberikan simulasi   pembelajaran  agar dapat  mengikutinya. 
                                 </p>";
                              }
                              else if ($A>$C&&$A==$B){
                                 ?> <img src="visual_auditori.png" alt=""> <?php
                                 echo "<br>Tipe Gaya Belajar Anda adalah Visual dan Auditori";
                                 echo "<p>Presentase visual : $A % dan auditori : $B %</p>";
                                 
                                 echo "<br><p>
                                 Anda memiliki dua gaya belajar yaitu gaya belajar Visual dan gaya belajar Auditori. Jika melihat dari sisi gaya belajar visual Anda akan memanfaatkan kemampuan mata atau visual secara maksimal dalam kegiatan belajar seperti membaca, menggambar, dan mengamati. Gaya belajar ini harus melihat bahasa tubuh dan eksekusi pengajar untuk mengerti materi yang diajarkan. Sementara jika melihat dari sisi gaya belajar Auditori, Anda lebih mengandalkan kemampuan mendengar. Orang dengan gaya auditori melakukan pembelajaran dengan menyimak, mendengarkan  materi  yang disampaikan oleh pengajar. Biasanya  anak auditori  cenderung memiliki ciri-ciri cepat dalam berbicara. Dan Tipe Gaya Belajar anda merupakan penggabungan dari tipe gaya belajar yang mengandalkan kemampuan visual atau penglihatan serta kemampuan mendengar. 
                                 </p>";
                                 
                              }
                              else if ($B>$C&&$B==$A){
                                 ?> <img src="visual_auditori.png" alt=""> <?php
                                 echo "<br>Tipe Gaya Belajar Anda adalah Visual dan  Auditori";
                                 echo "<p>Presentase visual : $A % dan auditori : $B %</p>";
                                
                                 echo "<br><p>
                                 Anda memiliki dua gaya belajar yaitu gaya belajar Visual dan gaya belajar Auditori. Jika melihat dari sisi gaya belajar visual Anda akan memanfaatkan kemampuan mata atau visual secara maksimal dalam kegiatan belajar seperti membaca, menggambar, dan mengamati. Gaya belajar ini harus melihat bahasa tubuh dan eksekusi pengajar untuk mengerti materi yang diajarkan. Sementara jika melihat dari sisi gaya belajar Auditori, Anda lebih mengandalkan kemampuan mendengar. Orang dengan gaya auditori melakukan pembelajaran dengan menyimak, mendengarkan  materi  yang disampaikan oleh pengajar. Biasanya  anak auditori  cenderung memiliki ciri-ciri cepat dalam berbicara. Dan Tipe Gaya Belajar anda merupakan penggabungan dari tipe gaya belajar yang mengandalkan kemampuan visual atau penglihatan serta kemampuan mendengar. 
                                 </p>";
                              }

                              else if ($A>$B&&$A==$C){
                                 ?> <img src="visual_kinestetik.png" alt=""> <?php
                                 echo "<br>Tipe Gaya Belajar Anda adalah Visual dan Kinestetik";
                                 echo "<p>Presentase visual : $A % dan kinestetik : $C %</p>";
                                
                                 echo "<br><p>
                                 Anda memiliki dua gaya belajar yaitu gaya belajar Visual dan gaya belajar Kinestetik. Jika melihat dari sisi gaya belajar visual Anda akan memanfaatkan kemampuan mata atau visual secara maksimal dalam kegiatan belajar seperti membaca, menggambar, dan mengamati. Gaya belajar ini harus melihat bahasa tubuh dan eksekusi pengajar untuk mengerti materi yang diajarkan. Sementara jika melihat dari sisi gaya belajar Anda memiliki tipe gaya  belajar kinestetik sehingga  lebih  suka  belajar langsung.  Anda merasa  sulit  belajar berjam-jam dikelas  karena  keinginan  untuk  beraktifitas.  Metode  pembelajaran yang baik untuk tipe anak kinestetik yaitu dengan memberikan simulasi   pembelajaran  agar dapat  mengikutinya.  Dan Tipe Gaya Belajar anda merupakan penggabungan dari tipe gaya belajar yang mengandalkan kemampuan visual atau penglihatan serta dengan cara melakukan langsung. 
                                 </p>";
                              }
                              else if ($C>$B&&$C==$A){
                                 ?> <img src="visual_kinestetik.png" alt=""> <?php
                                 echo "<br>Tipe Gaya Belajar Anda adalah Visual dan Kinestetik";
                                 echo "<p>Presentase visual : $A % dan kinestetik : $C %</p>";
                                 
                                 echo "<br><p>
                                 Anda memiliki dua gaya belajar yaitu gaya belajar Visual dan gaya belajar Kinestetik. Jika melihat dari sisi gaya belajar visual Anda akan memanfaatkan kemampuan mata atau visual secara maksimal dalam kegiatan belajar seperti membaca, menggambar, dan mengamati. Gaya belajar ini harus melihat bahasa tubuh dan eksekusi pengajar untuk mengerti materi yang diajarkan. Sementara jika melihat dari sisi gaya belajar Anda memiliki tipe gaya  belajar kinestetik sehingga  lebih  suka  belajar langsung.  Anda merasa  sulit  belajar berjam-jam dikelas  karena  keinginan  untuk  beraktifitas.  Metode  pembelajaran yang baik untuk tipe anak kinestetik yaitu dengan memberikan simulasi   pembelajaran  agar dapat  mengikutinya.  Dan Tipe Gaya Belajar anda merupakan penggabungan dari tipe gaya belajar yang mengandalkan kemampuan visual atau penglihatan serta dengan cara melakukan langsung. 
                                 </p>";
                              }
                              else if ($B>$A&&$B==$C){
                                 ?> <img src="auditori_kinestetik.png" alt=""> <?php
                                 echo "<br>Tipe Gaya Belajar Anda adalah Auditori dan Kinestetik";
                                 echo "<p>Presentase auditori : $B % dan kinestetik : $C %</p>";
                                 
                                 echo "<br><p>
                                 Anda memiliki dua gaya belajar yaitu gaya belajar Auditori dan gaya belajar Kinestetik. Jika melihat dari sisi gaya belajar Auditori, sehingga Anda lebih mengandalkan kemampuan mendengar. Orang dengan gaya auditori melakukan pembelajaran dengan menyimak, mendengarkan  materi  yang disampaikan oleh pengajar. Biasanya  anak auditori  cenderung memiliki ciri-ciri cepat dalam berbicara. Sementara jika melihat dari sisi gaya belajar Anda memiliki tipe gaya  belajar kinestetik sehingga  lebih  suka  belajar langsung.  Anda merasa  sulit  belajar berjam-jam dikelas  karena  keinginan  untuk  beraktifitas.  Metode  pembelajaran yang baik untuk tipe anak kinestetik yaitu dengan memberikan simulasi   pembelajaran  agar dapat  mengikutinya.  Dan Tipe Gaya Belajar anda merupakan penggabungan dari tipe gaya belajar yang mengandalkan kemampuan mendengar serta dengan cara melakukan langsung. 
                                 </p>";
                              }
                              else if ($C>$A&&$C==$B){
                                 ?> <img src="auditori_kinestetik.png" alt=""> <?php
                                 echo "<br>Tipe Gaya Belajar Anda adalah Auditori dan  Kinestetik";
                                 echo "<p>Presentase auditori : $B % dan kinestetik : $C %</p>";
                                
                                 echo "<br><p>
                                 Anda memiliki dua gaya belajar yaitu gaya belajar Auditori dan gaya belajar Kinestetik. Jika melihat dari sisi gaya belajar Auditori, sehingga Anda lebih mengandalkan kemampuan mendengar. Orang dengan gaya auditori melakukan pembelajaran dengan menyimak, mendengarkan  materi  yang disampaikan oleh pengajar. Biasanya  anak auditori  cenderung memiliki ciri-ciri cepat dalam berbicara. Sementara jika melihat dari sisi gaya belajar Anda memiliki tipe gaya  belajar kinestetik sehingga  lebih  suka  belajar langsung.  Anda merasa  sulit  belajar berjam-jam dikelas  karena  keinginan  untuk  beraktifitas.  Metode  pembelajaran yang baik untuk tipe anak kinestetik yaitu dengan memberikan simulasi   pembelajaran  agar dapat  mengikutinya.  Dan Tipe Gaya Belajar anda merupakan penggabungan dari tipe gaya belajar yang mengandalkan kemampuan mendengar serta dengan cara melakukan langsung. 
                                 </p>";
                              }
                              else{
                                 ?> <img src="campuran2.png" alt=""> <?php
                                 echo "<br>Tipe Gaya Belajar Anda adalah Dominan pada semua gaya belajar";
                                 echo "<br><p>
                              
                                 </p>";
                                 echo "<br>Gaya belajar disini terbagi menjadi gaya belajar visual, auditori, dan kinestetik. Anda bisa belajar dengan fleksibel di semua gaya seperti membaca, melihat, mendengarkan, atau melakukan dengan kegiatan langsung.";
                                 echo "<br><p>
                              
                                 </p>";
                                 
                              }
                           }
                        ?>
                     </div>                        
                  </div>
               <br>
               <b><p>Sekali lagi terimakasih telah menggunakan website TKTB (Tes Tipe Kepribadian dan Gaya Belajar). Setelah mengikuti tes dan mendapatkan hasil, yuk beri feedback pada kami dengan <a href="validasi.php">klik tulisan ini!</a> </p></b>
               
           </div>
        </div>
    </div>
</body>
</html>