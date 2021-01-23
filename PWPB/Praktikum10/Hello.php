<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo in PHP</title>
</head>
<body><h1>Data Pribadi Saya</h1><br>
    <p>
        <?php // Deklarasi Variable 
            $nama_saya ="Lucky";
            $kelas = "XI RPL 1";
            $nis = "1920118067";
            $umur = "16";
            $berat_badan = "65";
        /* dibawah ini adalah script untuk menampilkan data yang telah dideklarasikan diatas */
        echo ("Nama Saya $nama_saya <br>");
        echo "Sekarang Kelas $kelas dan NIS Saya $nis <br>";
        echo 'Umur saya sekarang adalah '. $umur .' tahun <br>';
        echo "Berat badan saya $berat_badan Kg"
        ?>
    </p>
    
</body>
</html>