<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #2a9d8f;
        }
        form {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            background-color: #2a9d8f;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        button:hover {
            background-color: #21867a;
        }
        .result {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .result p {
            margin: 10px 0;
        }
    </style>
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