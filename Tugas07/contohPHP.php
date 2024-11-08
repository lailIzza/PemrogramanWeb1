<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contoh PHP Modul</title>
</head>
<body>
    <h1>Contoh hasil dari modul</h1>

    <h3>Looping data</h3>
    <?php
        for ($i = 1; $i <= 15; $i++)
        {
            echo"<li>Nama mahasiswa ke-$i</i>";
        }
    ?>

    <h3>Variabel Integer</h3>
    <?php 
        $a = 21;
        $b = 6;
        $c = $a + $b;
        $d = "Hasil dari a + b = $c";

        echo " $d";
    ?>

    <h3>Variabel Float</h3>
    <?php
        $k = 10.66;
        $j = 12.4;
        $l = $k + $j;

        echo "Hasil dari k + j = $l";
    ?>

    <h3>Variabel String</h3>
    <?php
        $string1 = "Ini adalah string sederhana";
        $string2 = "Ini adalah string yang bisa memiliki beberapa baris";
        $string3 = 'Dia berkata : " I\'ll be back"';

        echo $string1; echo"<br>";
        echo $string2; echo"<br>";
        echo $string3; echo"<br>";
    ?>

    <h3>Boolean</h3>
    <?php
        $benar = true;
        $salah = false;

        echo "benar = $benar, salah = $salah"
    ?>

    <h3>Operator Matematika</h3>
    <?php
        $hasil1= -3;
        $hasil2= 3+5;
        $hasil3= 8-4.5;
        $hasil4= 2.5;
        $hasil5= 3+8/5-3;
        $hasil6= 10%4;

        echo $hasil1;var_dump($hasil1);
        echo "<br \>";
        echo $hasil2;var_dump($hasil2);
        echo "<br \>";
        echo $hasil3;var_dump($hasil3);
        echo "<br \>";
        echo $hasil4;var_dump($hasil4);
        echo "<br \>";
        echo $hasil5;var_dump($hasil5);
        echo "<br \>";
        echo $hasil6;var_dump($hasil6);
        echo "<br \>";
    ?>

    <hr>
    <h1>Tugas Modul Operasi Aritmatika</h1>
    <?php
        //variabel
        $pemasukan = 50000000;
        $hutang1 = 16500000;
        $bunga1 = 5/100;
        $hutang2 = 9500000;
        $bunga2 = 4.5/100;

        // Hitung bunga masing-masing hutang
        $bunga_hutang1 = $hutang1 * $bunga1;
        $bunga_hutang2 = $hutang2 * $bunga2;

        // Jumlah hutang setelah ditambah bunganya
        $jumlahhutang1 = $hutang1 + $bunga_hutang1;
        $jumlahhutang2 = $hutang2 + $bunga_hutang2;

        //sisa uang setelah dikurangi hutang dan bunganya
        $sisa_uang = $pemasukan - ($jumlahhutang1 + $jumlahhutang2);
        echo "Jumlah sisa uang adalah = Rp. " . number_format($sisa_uang, 0, ',', '.') . "<br>";

        //jumlah total bunga hutang
        $total_bunga_hutang = $bunga_hutang1 + $bunga_hutang2;
        echo "Jumlah total bunga hutang adalah = Rp. " . number_format($total_bunga_hutang, 0, ',', '.') . "<br>";

        //jumlah total hutang, termasuk bunganya
        $total_hutang = $jumlahhutang1 + $jumlahhutang2;
        echo "Jumlah total hutang adalah = Rp. " . number_format($total_hutang, 0, ',', '.');

    ?>
</body>
</html>