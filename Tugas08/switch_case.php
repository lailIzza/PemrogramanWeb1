<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case example</title>
    
</head>

<body>
    <h1>Weight.fit</h1>
    <hr>

    <form method="POST" action="">
        <label for="berat_badan">Masukkan Berat Badan Anda (kg)</label>
        <input type="number" id="berat_badan" name="berat_badan" placeholder="Contoh: 70" required>

        <br><br>
        <label for="tinggi_badan">Masukkan Tinggi Badan Anda (cm)</label>
        <input type="number" id="tinggi_badan" name="tinggi_badan" placeholder="Contoh: 170" required>

        <button type="submit">Cek</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['berat_badan']) && isset($_POST['tinggi_badan'])) {
        $berat_badan = floatval($_POST['berat_badan']);
        $tinggi_badan = floatval($_POST['tinggi_badan']);
        $tinggi_m = $tinggi_badan / 100; // Konversi ke meter
        $bmi = $berat_badan / ($tinggi_m * $tinggi_m); // Hitung BMI

        echo "<div class='result'>";
        echo "<h3>Hasil</h3>";
        echo "<p>Berat badan anda: " .number_format($berat_badan). "</p>";
        echo "<p>Tinggi badan anda: " .number_format($tinggi_badan). "</p>";
        echo "<p>BMI Anda: " . number_format($bmi, 2) . "</p>";

        // Menentukan kategori berat badan menggunakan switch case
        switch (true) {
            case ($bmi < 18.5):
                echo "<p>Kategori: Berat badan Anda kurang.</p>";
                break;
            case ($bmi >= 18.5 && $bmi <= 24.9):
                echo "<p>Kategori: Berat badan Anda ideal.</p>";
                break;
            case ($bmi >= 25 && $bmi <= 29.9):
                echo "<p>Kategori: Anda memiliki kelebihan berat badan.</p>";
                break;
            default:
                echo "<p>Kategori: Anda berada pada kategori obesitas.</p>";
                break;
        }
        echo "</div>";
    }
    ?>
</body>
</html>