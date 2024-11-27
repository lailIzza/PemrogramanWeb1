<?php
do {
    $angka = readline("Silahkan masukan angka: ");
    $totalDigit = 0;

    // perulangan untuk menghitung input dari pengguna
    for ($i = 0; $i < strlen($angka); $i++) {
        if (ctype_digit($angka[$i])) {
            $totalDigit += (int)$angka[$i];
        }
    }

    echo"-------------------------------------\n";
    echo "Jumlah total digit = " . $totalDigit . "\n";

    // validasi input, jika pengguna salah memasukan yang bukan angka
    if (!ctype_digit($angka)) {
        echo "Peringatan: Input tidak sepenuhnya angka.\n";
    }

    // fitur untuk mengulangi input
    $ulangi = readline("Apakah ingin mengulangi? (y/t): ");
}   while (strtolower($ulangi) == 'y');

echo "Program selesai. Terima kasih!\n";
echo"---------------------------------------\n";
?>
