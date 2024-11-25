<?php

$angka = readline("Silahkan masukan angka: ");
$totalDigit = 0;

// perulangan untuk menghitung input dari pengguna
for ($i = 0; $i < strlen($angka); $i++) {
    if (ctype_digit($angka[$i])) {
        $totalDigit += (int)$angka[$i];
    }
}

echo "Jumlah total digit = " . $totalDigit . "\n";

// tambahkan validasi input
if (!ctype_digit($angka)) {
    echo "Peringatan: Input tidak sepenuhnya angka.\n";
}

// tambahkan fitur untuk mengulangi input
$ulangi = readline("Apakah ingin mengulangi? (y/n): ");
if (strtolower($ulangi) == 'y') {
    // panggil script ini lagi
    include __FILE
    }

?>
