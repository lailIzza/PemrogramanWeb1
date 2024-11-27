<?php

echo"<h2>Perulangan For</h2>";
// perulangan for
for ($i = 0; $i < 10; $i++){
    echo "<h3>Ini perulangan ke-$i</h3>";
}

echo"<hr>";
echo"<h3>Perulangan While</h3>";
// perulangan while
$ulangi = 0;

while($ulangi < 10){
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}

echo"<hr>";
echo"<h3>Perulangan do While</h3>";
// perulangan do while
$ulangi = 10;

do {
    echo "<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
} while ($ulangi > 0);


echo"<hr>";
echo"<h3>Perulangan foreach</h3>";
//perulangan foreach
$books = [
    "Panduan Belajar PHP untuk Pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MySQL",
    "Membuat Chat Bot dengan PHP"
];

echo "<h5>Judul Buku PHP:</h5>";
echo "<ul>";
foreach($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ul>";

echo"<hr>";
echo"<h3>Perulangan Bersarang</h3>";
// perulangan bersarang 1
for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 10; $j++){
        echo "Ini perulangan ke ($i, $j)<br>";
    }
}

echo"<hr>";
// perulangan bersarang 2
$i = 0;
while($i < 10){
    for($j = 0; $j < 10; $j++){
        echo "Ini perulangan ke ($i, $j)<br>";
    }

    $i++;
}

?>
